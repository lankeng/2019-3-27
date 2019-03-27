//app.js
App({
  onLaunch: function () {
    let that = this;

    wx.request({
      url: 'http://localhost/bookstore/Home/Book/bookInfo',//自己的服务接口地址
      method: 'GET',
      header: {
        'content-type': 'application/json' // 默认值
      },
      data: {},
      success: function (e) {
        //获取数据库所有书类数据
        console.log(e.data)
        //that.setData({
        //Home_data: e
        getApp().globalData.bookinfo = e.data
        //});
      },
      fail: function () {
        console.log('系统错误')
      }
    })
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
                        //console.log('php', info.data);//从后台返回数据成功验证
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
  globalData: {
    userInfo: null,
    bookinfo:[]
  }
})