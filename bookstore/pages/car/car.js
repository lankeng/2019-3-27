var json = require('../../data/Home_data.js')

//获取应用实例
const app = getApp();

Page({

  /**
   * 页面的初始数据
   */
  data: {
    userInfo: {},
    canIUse: wx.canIUse('button.open-type.getUserInfo'),
    cartItems: [],
    total: 0,
    CheckAll: true,
    showaho:true
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    // if (app.globalData.userInfo) {
    //   this.setData({
    //     userInfo: app.globalData.userInfo,
    //     hasUserInfo: true
    //   })
    // } else if (this.data.canIUse) {
    //   // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
    //   // 所以此处加入 callback 以防止这种情况
    //   app.userInfoReadyCallback = res => {
    //     this.setData({
    //       userInfo: res.userInfo,
    //       hasUserInfo: true
    //     })
    //   }
    // } else {
    //   // 在没有 open-type=getUserInfo 版本的兼容处理
    //   wx.getUserInfo({
    //     success: res => {
    //       app.globalData.userInfo = res.userInfo
    //       this.setData({
    //         userInfo: res.userInfo, 
    //         hasUserInfo: true
    //       })
    //     }
    //   })
    // }
    // 查看是否授权
    var _this = this
    wx.getSetting({
      success: function (res) {
        if (res.authSetting['scope.userInfo']) {
          // 已经授权，可以直接调用 getUserInfo 获取头像昵称
          wx.getUserInfo({
            success: function (res) {
              //console.log(res.userInfo)//获取用户信息
              _this.setData({
                showaho: false
              })
            }
          })
        }
      }
    })
  },
  bindGetUserInfo: function (event) {
    var _this = this
    console.log(event.detail.userInfo)
    //使用
    wx.getSetting({
      success: res => {
        if (res.authSetting['scope.userInfo']) {
          // 已经授权，可以直接调用 getUserInfo 获取头像昵称，不会弹框
          _this.setData({
            showaho: false
          })
          wx.login({
            success: function (res) {
              var code = res.code;//登录凭证
              if (code) {
                //2、调用获取用户信息接口
                wx.getUserInfo({
                  success: function (res) {
                    _this.setData({
                      showaho: false
                    })
                    console.log({ encryptedData: res.encryptedData, iv: res.iv, code: code })
                    //3.请求自己的服务器，解密用户信息 获取unionId等加密信息
                    // wx.request({
                    //   url: 'https://xxxx.com/wxsp/decodeUserInfo',//自己的服务接口地址
                    //   method: 'post',
                    //   header: {
                    //     'content-type': 'application/x-www-form-urlencoded'
                    //   },
                    //   data: { encryptedData: res.encryptedData, iv: res.iv, code: code },
                    //   success: function (data) {

                    //     //4.解密成功后 获取自己服务器返回的结果
                    //     if (data.data.status == 1) {
                    //       var userInfo_ = data.data.userInfo;
                    //       console.log(userInfo_);
                    //     } else {
                    //       console.log('解密失败')
                    //     }

                    //   },
                    //   fail: function () {
                    //     console.log('系统错误')
                    //   }
                    // })
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
              console.log('登陆失败')
            }
          })

        } else {
          console.log('获取用户信息失败')
        }
      }
    })
  },
  // getUserInfo: function (e) {
  //   console.log(e)
  //   app.globalData.userInfo = e.detail.userInfo
  //   this.setData({
  //     userInfo: e.detail.userInfo,
  //     hasUserInfo: true
  //   })
  todetail:function(e){
    var HomeId = e.currentTarget.dataset.id
    var HomeclaId = e.currentTarget.dataset.claid
    wx.navigateTo({
      url: '../../pages/book-detail/book-detail?id=' + HomeId + '&&claid=' + HomeclaId,
    })
  },
  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    this.onLoad()
    var cartItems = wx.getStorageSync("cartItems")//获取本地缓存
    this.setData({
      cartList: false,
      cartItems: cartItems
    })
    this.getsumTotal()
  },
  select: function (e) {
    var CheckAll = this.data.CheckAll;
    CheckAll = !CheckAll
    var cartItems = this.data.cartItems

    for (var i = 0; i < cartItems.length; i++) {
      cartItems[i].children[0].selected = CheckAll
    }

    this.setData({
      cartItems: cartItems,
      CheckAll: CheckAll
    })
    this.getsumTotal()
  },
  add: function (e) {
    var cartItems = this.data.cartItems   //获取购物车列表
    var index = e.currentTarget.dataset.index //获取当前点击事件的下标索引
    var value = cartItems[index].children[0].value  //获取购物车里面的value值

    value++
    cartItems[index].children[0].value = value;
    this.setData({
      cartItems: cartItems
    });
    this.getsumTotal()

    wx.setStorageSync("cartItems", cartItems)  //存缓存
  },

  //减
  reduce: function (e) {
    var cartItems = this.data.cartItems  //获取购物车列表
    var index = e.currentTarget.dataset.index  //获取当前点击事件的下标索引
    var value = cartItems[index].children[0].value  //获取购物车里面的value值

    if (value == 1) {
      value--
      cartItems[index].children[0].value = 1
    } else {
      value--
      cartItems[index].children[0].value = value;
    }
    this.setData({
      cartItems: cartItems
    });
    this.getsumTotal()
    wx.setStorageSync("cartItems", cartItems)
  },

  // 选择
  selectedCart: function (e) {

    var cartItems = this.data.cartItems   //获取购物车列表
    var index = e.currentTarget.dataset.index;  //获取当前点击事件的下标索引
    var selected = cartItems[index].children[0].selected;    //获取购物车里面的value值

    //取反
    cartItems[index].children[0].selected = !selected;
    this.setData({
      cartItems: cartItems
    })
    this.getsumTotal();
    wx.setStorageSync("cartItems", cartItems)
  },


  topay: function () {
    // var Id = this.data.homeid
    // var homeclaId = this.data.homeclaid
    // console.log(Id, homeclaId)
    // wx.navigateTo({
    //   url: '../../pages/pay/pay?id=' + Id + '&&claid=' + homeclaId
    // })
    var i,id,claid,value
    var cartItems = this.data.cartItems
    var payItems = []
    for (i = 0; i < cartItems.length;i++){
      if (cartItems[i].children[0].selected == true){
        claid = cartItems[i].claid
        id = cartItems[i].children[0].id
        value = cartItems[i].children[0].value
        payItems = [{claid: claid,id: id,value:value}].concat(payItems)
      }
    }
    payItems = payItems.reverse()
    wx.setStorageSync("payItems", payItems)
    var total = this.data.total
    wx.navigateTo({
      url: '../../pages/pay/pay?total='+total
     })
  },


  //删除
  shanchu: function (e) {
    var cartItems = this.data.cartItems  //获取购物车列表
    var index = e.currentTarget.dataset.index  //获取当前点击事件的下标索引
    cartItems.splice(index, 1)
    this.setData({
      cartItems: cartItems
    });
    if (cartItems.length) {
      this.setData({
        cartList: false
      });
    }
    this.getsumTotal()
    wx.setStorageSync("cartItems", cartItems)
  },

  //提示
  go: function (e) {
    this.setData({
      cartItems: []
    })
    wx.setStorageSync("cartItems", [])
  },

  //合计
  getsumTotal: function () {
    var sum = 0
    for (var i = 0; i < this.data.cartItems.length; i++) {
      if (this.data.cartItems[i].children[0].selected) {
        sum += this.data.cartItems[i].children[0].value * this.data.cartItems[i].children[0].currentprice
        //console.log(this.data.cartItems[i].children[0].value)//获取商品数量
      }
    }
    //更新数据
    this.setData({
      //total: sum
      total: sum.toFixed(2)
    })
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
    
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
    
  }
})