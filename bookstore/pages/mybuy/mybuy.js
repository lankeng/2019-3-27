var json = require("../../data/Home_data.js")
Page({

  /**
   * 页面的初始数据
   */
  data: {
    moimg:"../../images/headimg.png",
    showaho: true,
    canIUse: wx.canIUse('button.open-type.getUserInfo'), 
    nickName:''
  },
  toorder: function () {
    wx.navigateTo({
      url: '../order/order',
    })
  },
  toaddress:function(){
    wx.navigateTo({
      url: '../maddress/maddress',
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var _this = this
    wx.getSetting({
      success: function (res) {
        if (res.authSetting['scope.userInfo']) {
          // 已经授权，可以直接调用 getUserInfo 获取头像昵称
          wx.getUserInfo({
            success: function (res) {
              _this.setData({
                showaho: false,
                nickName: res.userInfo.nickName,
                moimg: res.userInfo.avatarUrl
              })
            }
          })
        }
      }
    })
  },
  aboutUs: function () {
    wx.showModal({
      title: '提示',
      content: '本系统基于本人独立开发！',
      showCancel: false
    })
  },
  bindGetUserInfo: function (event) {
    var _this = this
    //console.log(event.detail.userInfo)
    //使用
    wx.getSetting({
      success: res => {
        if (res.authSetting['scope.userInfo']) {
          // 已经授权，可以直接调用 getUserInfo 获取头像昵称，不会弹框
          _this.onLoad()
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
                   // console.log({ encryptedData: res.encryptedData, iv: res.iv, code: code })
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
                    //      // console.log(userInfo_);
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