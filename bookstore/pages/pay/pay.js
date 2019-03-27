var json = require('../../data/Home_data.js')
Page({

  /**
   * 页面的初始数据
   */
  data: {
    address: {},
    array: ['不限时送货时间', '工作日送货', '双休日、假日送货'],
    index: 0,
    hasAddress: false,
    payItems: [],
    hasdata: false,
    total: 0,
    isNeedLogistics: 0,
    addid: '',
    selAddress: '',
    selectads: true,
    recadress: [],
    timetoback: '',
    lmessage: '',
    openid:''
  },
  select: function(e) {
    this.setData({
      index: e.detail.value
    })
    console.log(this.data.index)
    if (e.detail.value == 0) {
      this.setData({
        timetoback: '不限时送货时间'
      })
    }
    if (e.detail.value == 1) {
      this.setData({
        timetoback: '工作日送货'
      })
    }
    if (e.detail.value == 2) {
      this.setData({
        timetoback: '双休日、假日送货'
      })
    }
  },
  goaddress: function() {
    wx.navigateTo({
      url: '../../pages/address/address',
    })
  },

  onShow: function(e) {
    var _this = this
    wx.getStorage({
      key: 'address',
      success(res) {
        _this.setData({
          address: res.data,
          hasAddress: true
        })
      }
    })  
    var pages = getCurrentPages();
    var currPage = pages[pages.length - 1];
    if (currPage.data.selAddress == "") {
      // _this.getUserAddress(_this.data.userId);
    } else {
      //console.log(currPage.data.addid)//获取从选择地址传过来的addid
      _this.setData({ //将携带的参数赋值
        addid: currPage.data.addid
      });
    }
    if (_this.data.addid !== '') {
      wx.request({
        url: 'http://localhost/bookstore/Home/Address/maaddress', //存入用户信息接口
        data: {
          addid: currPage.data.addid
        },
        method: "GET",
        header: {
          // 'content-type': 'application/json' // 默认值
          'content-type': 'application/x-www-form-urlencoded' // 默认值
        },
        success(info) {
          //console.log('adressphp', info.data.updateads[0]);//用addid到后台获取详情地址返回值
          _this.setData({
            recadress: info.data.updateads[0],
            selectads: false
          })
          //console.log(_this.data.recadress)
        }
      })
    }
  },
  lmessage: function(e) {
    //console.log(e.detail.value)
    this.setData({
      lmessage: e.detail.value
    })
  },
  pay: function(e) {
    var that = this
    if (that.data.selectads == true) {
      wx.showModal({
        title: '提示',
        content: '请选择收货地址',
        showCancel: false
      })
      return
    } else {
      wx.navigateTo({
        url: '/pages/alpay/alpay',
      })
      //console.log(that.data.recadress)
      var recuser = that.data.recadress.recuser
      var telnum = that.data.recadress.telnum
      var area = that.data.recadress.area
      var address = that.data.recadress.address
      var bookname = '';
      var booknum = '';
      var countprice = '';
      var deliverytime = that.data.timetoback;
      var lmessage = that.data.lmessage;
      var pay = 0;
      var openid = that.data.openid
      if (deliverytime == '') {
        deliverytime = '不限时送货时间'
      }
      // console.log("payItems",that.data.payItems)
      // console.log("data",that.data.data)
      if (that.data.data == undefined) {
        var more = that.data.payItems
        for (var i = 0; i < more.length; i++) {
          if (i == more.length - 1) {
            bookname = bookname + more[i].title;
            booknum = booknum + more[i].value;
            countprice = countprice + more[i].currentprice;
          } else {
            bookname = bookname + more[i].title + ","
            booknum = booknum + more[i].value + ",";
            countprice = countprice + more[i].currentprice + ",";
          }
          pay = that.data.total;
        }
      }
      if (that.data.payItems[0] == undefined) {
        bookname = that.data.data.title;
        booknum = '1';
        countprice = that.data.data.currentprice;
        pay = booknum * countprice
      }
      //console.log(bookname, booknum, countprice, pay, recuser, telnum, area, address, deliverytime, lmessage)//传订单数据到数据库
      wx.request({
        url: 'http://localhost/bookstore/Home/Order/allorder', //存入用户信息接口
        data: {
          bookname: bookname,
          booknum: booknum,
          countprice: countprice,
          pay: pay,
          recuser: recuser,
          telnum: telnum,
          area: area,
          address: address,
          deliverytime: deliverytime,
          lmessage: lmessage,
          openid:openid
        },
        method: "POST",
        header: {
          'content-type': 'application/x-www-form-urlencoded' // 默认值
        },
        success(info) {
          //console.log('php', info.data);//传入数据库数据成功返回值
        }
      })
    }
    //点击结算，重新存入缓存
    var payItems = wx.getStorageSync("payItems")
    var cartItems = wx.getStorageSync("cartItems")
    var i, k;
    for (i = 0; i < payItems.length; i++) {
      var claid = payItems[i].claid
      var id = payItems[i].id
      for (k = 0; k < cartItems.length; k++) {
        if (cartItems[k].claid == claid && cartItems[k].children[0].id == id) {
          cartItems.splice(k, 1);
          k--;
        }
      }
      wx.setStorageSync("cartItems", cartItems)
    }
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function(options) {
    var payId = options.id
    var payclaid = options.claid
    var total = options.total
    //console.log(wx.getStorageSync("cartItems"))//查询缓存cartItems
    //console.log(wx.getStorageSync("cartItems[0]"))//查询缓存cartItems[0]
    //console.log(wx.getStorageSync("cartItems").length)//查询缓存cartItems的长度
    if (payId == undefined) {
      var payItems = wx.getStorageSync("payItems")
      var allitems = []
      var id, claid, value
      for (var i = 0; i < payItems.length; i++) {
        id = payItems[i].id
        claid = payItems[i].claid
        allitems = allitems.concat(getApp().globalData.bookinfo[claid].children[id])
        allitems[i].value = payItems[i].value
      }
      console.log(allitems, total) //获取加入购物车商品的id claid到数据库查询商品数据
      this.setData({
        payItems: allitems,
        total: total
      })
      var that = this;
      wx.login({
        success: function (r) {
          var code = r.code; //登录凭证
          if (code) {
            //2、调用获取用户信息接口
            wx.getUserInfo({
              success: function (res) {
                //console.log({ encryptedData: res.encryptedData, iv: res.iv, code: code })//获取code
                //console.log(res);//all info
                if (code) {
                  //发起网络请求
                  wx.request({
                    url: 'https://api.weixin.qq.com/sns/jscode2session?appid=wx545303d3fd0025ab&secret=33511a78b54741477c0cda496af8b8fb&js_code=' + code + '&grant_type=authorization_code',
                    data: {},
                    method: "POST",
                    header: {
                      'content-type': 'application/x-www-form-urlencoded' // 默认值
                    },
                    success: function (e) {
                      //var openid = e//返回openid
                      // let userLoginInfo = userInfo.detail.getuserInfo;
                      //console.log('openid', e.data.openid);//获取openid
                      that.setData({
                        openid: e.data.openid
                      })
                      //console.log(that.data.openid)
                    }
                  })
                }
                //3.解密用户信息 获取unionId
                //...
              },
              fail: function () {
                console.log('获取用户信息失败')
              }
            })
          } else {
            console.log('获取用户登录态失败！' + r.errMsg)
          }
        },
        fail: function () {
          callback(false)
        }
      })
    } else {
      var data = getApp().globalData.bookinfo[payclaid].children[payId]
      this.setData({
        data: data,
        hasdata: true,
      })
      var that = this;
      wx.login({
        success: function(r) {
          var code = r.code; //登录凭证
          if (code) {
            //2、调用获取用户信息接口
            wx.getUserInfo({
              success: function(res) {
                //console.log({ encryptedData: res.encryptedData, iv: res.iv, code: code })//获取code
                //console.log(res);//all info
                if (code) {
                  //发起网络请求
                  wx.request({
                    url: 'https://api.weixin.qq.com/sns/jscode2session?appid=wx545303d3fd0025ab&secret=33511a78b54741477c0cda496af8b8fb&js_code=' + code + '&grant_type=authorization_code',
                    data: {},
                    method: "POST",
                    header: {
                      'content-type': 'application/x-www-form-urlencoded' // 默认值
                    },
                    success: function(e) {
                      //var openid = e//返回openid
                      // let userLoginInfo = userInfo.detail.getuserInfo;
                      //console.log('openid', e.data.openid);//获取openid
                      that.setData({
                        openid:e.data.openid
                      })
                      //console.log(that.data.openid)
                      wx.request({
                        url: 'http://localhost/bookstore/Home/User/index', //存入用户信息接口
                        data: {
                          code: code,
                          openid: e.data.openid,
                          avatarUrl: res.userInfo.avatarUrl,
                          city: res.userInfo.city,
                          country: res.userInfo.country,
                          gender: res.userInfo.gender,
                          language: res.userInfo.language,
                          nickName: res.userInfo.nickName,
                          province: res.userInfo.province
                        },
                        method: "POST",
                        header: {
                          // 'content-type': 'application/json' // 默认值
                          'content-type': 'application/x-www-form-urlencoded' // 默认值
                        },
                        success(info) {
                          //console.log('php', info.data);//返回数据库传来的获取数据成功
                          //console.log(res.data);
                          getApp().globalData.userOpenId = e.data.openid;
                          // wx: wx.redirectTo({
                          //   url: '/pages/index/index',
                          //   success: function (res) { },
                          //   fail: function (res) { },
                          //   complete: function (res) { },
                          // })
                        }
                      })

                    }
                  })
                }
                //3.解密用户信息 获取unionId
                //...
              },
              fail: function() {
                console.log('获取用户信息失败')
              }
            })
          } else {
            console.log('获取用户登录态失败！' + r.errMsg)
          }
        },
        fail: function() {
          callback(false)
        }
      })
    }

    this.setData({ //地址
      isNeedLogistics: 1,
    });
  },
  addAddress: function() {
    wx.navigateTo({
      url: "/pages/addressadd/addressadd"
    })
  },
  selectAddress: function() {
    wx.navigateTo({
      url: "/pages/maddress/maddress"
    })
  },
})