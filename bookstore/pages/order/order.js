// pages/order/order.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    showdata:[],
    change:true
  },
  deleteorder: function (e) {
    var that = this;
    var orderid = e.currentTarget.dataset.orderid;
    console.log(orderid)
    wx.showModal({
      title: '提示',
      content: '确定要取消该订单吗？',
      success: function (res) {
        if (res.confirm) {
          wx.request({
            url: 'http://localhost/bookstore/Home/Order/delorder',
            data: {
              orderid: orderid
            },
            method: "POST",
            header: {
              'content-type': 'application/x-www-form-urlencoded' // 默认值
            },
            success: (res) => {
              console.log(res.data)
              that.onLoad()
            }
          })
        } else if (res.cancel) {
          console.log('用户点击取消')
        }
      }
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.login({
      success: function (r) {
        var code = r.code;//登录凭证
        if (code) {
          //2、调用获取用户信息接口
          wx.getUserInfo({
            success: function (res) {
              //获取code
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
                    //可以获取openid
                    //console.log('openid', e.data.openid);
                    var openid = e.data.openid;
                    wx.request({
                      url: 'http://localhost/bookstore/Home/Order/showorder',
                      data: {
                        openid: openid
                      },
                      method: "POST",
                      header: {
                        'content-type': 'application/x-www-form-urlencoded' // 默认值
                      },
                      success: function (e) {
                        //console.log(e.data);//查看当前openid所对应的订单
                        var showdata = e.data;
                        that.setData({
                          showdata: showdata
                        })
                        //console.log(that.data.showdata)
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
    wx.showNavigationBarLoading(); //在标题栏中显示加载
    var that = this;
    wx.login({
      success: function (r) {
        var code = r.code;//登录凭证
        if (code) {
          //2、调用获取用户信息接口
          wx.getUserInfo({
            success: function (res) {
              //获取code
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
                    //可以获取openid
                    //console.log('openid', e.data.openid);
                    var openid = e.data.openid;
                    wx.request({
                      url: 'http://localhost/bookstore/Home/Order/showorder',
                      data: {
                        openid: openid
                      },
                      method: "POST",
                      header: {
                        'content-type': 'application/x-www-form-urlencoded' // 默认值
                      },
                      success: function (e) {
                        //console.log(e.data);//查看当前openid所对应的订单
                        var showdata = e.data;
                        that.setData({
                          showdata: showdata
                        })
                        //console.log(that.data.showdata)
                      },
                      complete: () => {
                        wx.hideNavigationBarLoading() //完成停止加载
                        wx.stopPullDownRefresh() //停止下拉刷新
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

      }
    })
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