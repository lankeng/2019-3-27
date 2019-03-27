//index.js
//获取应用实例
var app = getApp()
Page({
  data: {
    addressList: []
  },

  selectTap: function (e) {
    var id = e.currentTarget.dataset.addid;
    //console.log(id)//获取商品的addid
    // wx.request({
    //   url: 'https://api.it120.cc/' + app.globalData.subDomain + '/user/shipping-address/update',
    //   data: {
    //     token: wx.getStorageSync('token'),
    //     id: id,
    //     isDefault: 'true'
    //   },
    //   success: (res) => {
    //     wx.navigateBack({})
    //   }
    // })
    let pages = getCurrentPages();//当前页面
    let prevPage = pages[pages.length - 2];//上一页面
    //console.log(prevPage.route)//获取上一页面的地址
    if (prevPage.route == "pages/pay/pay"){
      prevPage.setData({//直接给上移页面赋值
        addid: id,
        selAddress: 'yes'
      });
      wx.navigateBack({//返回
        delta: 1
      })
    }
    // prevPage.setData({//直接给上移页面赋值
    //   item: e.currentTarget.dataset.item,
    //   selAddress: 'yes'
    // });
    // wx.navigateBack({//返回
    //   delta: 1
    // })
  },

  addAddess: function () {
    wx.navigateTo({
      url: "/pages/addressadd/addressadd"
    })
  },

  editAddess: function (e) {
    wx.navigateTo({
      url: "/pages/addressadd/addressadd?id=" + e.currentTarget.dataset.addid
    })
  },

  onLoad: function () {
    var that = this;
    wx.login({
      success: function (r) {
        var code = r.code;//登录凭证
        if (code) {
          //2、调用获取用户信息接口
          wx.getUserInfo({
            success: function (res) {
              //console.log({ encryptedData: res.encryptedData, iv: res.iv, code: code })
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
                    console.log('openid123', e.data.openid);//获取openid

                    wx.request({
                      url: 'http://localhost/bookstore/Home/Address/maaddress', //存入用户信息接口
                      data: {
                        openid: e.data.openid
                      },
                      method: "GET",
                      header: {
                        // 'content-type': 'application/json' // 默认值
                        'content-type': 'application/x-www-form-urlencoded' // 默认值
                      },
                      success(info) {
                        //console.log('php', info.data.showaddress);
                        that.setData({
                          addressList: info.data.showaddress
                        })
                      }
                    })
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
  },
  onShow: function () {
    // this.initShippingAddress();
    this.onLoad();
  },
  // initShippingAddress: function () {
  //   var that = this;
  //   wx.request({
  //     url: 'https://api.it120.cc/' + app.globalData.subDomain + '/user/shipping-address/list',
  //     data: {
  //       token: wx.getStorageSync('token')
  //     },
  //     success: (res) => {
  //       if (res.data.code == 0) {
  //         that.setData({
  //           addressList: res.data.data
  //         });
  //       } else if (res.data.code == 700) {
  //         that.setData({
  //           addressList: null
  //         });
  //       }
  //     }
  //   })
  // }

})
