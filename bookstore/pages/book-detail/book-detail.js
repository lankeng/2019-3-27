var json = require('../../data/Home_data.js')

Page({
  data: {
    HomeIndex: 0,
    homeid: 0,
    homeclaid: 0
  },
  goPay: function (e) {
    var _this = this
    wx.getSetting({
      success: function (res) {
        if (res.authSetting['scope.userInfo']) {
          // 已经授权，可以直接调用 getUserInfo 获取头像昵称
          //console.log("login")
          var Id = _this.data.homeid
          var homeclaId = _this.data.homeclaid
          //console.log(Id, homeclaId)//传claid id到订单页面
          wx.navigateTo({
            url: '../../pages/pay/pay?id=' + Id + '&&claid=' + homeclaId
          })
        }
        else {
          wx.showModal({
            title: '提示',
            content: '请先授权登录！',
            showCancel: false
          })
        }
      }
    })
  },
  boxtwo: function (e) {
    var index = parseInt(e.currentTarget.dataset.index)
    this.setData({
      HomeIndex: index
    })
  },
  addcart: function (e) {

    var cartItems = wx.getStorageSync("cartItems") || []
    //console.log(cartItems)//查看缓存cartItems的值
    var exist = cartItems.find(function (el) {
      return el.children[0].id == e.target.dataset.id
    })
    var existcla = cartItems.find(function (el) {
      return el.children[0].title == e.target.dataset.title
    })
    var existimage = cartItems.find(function (el) {
      return el.children[0].image == e.target.dataset.image
    })
    // console.log(exist, existcla)
    //如果购物车里面有该商品那么他的数量每次加一
    if (existcla) {
      if (existimage) {
        if (exist) {
          exist.children[0].value = parseInt(exist.children[0].value) + 1
        } else {
          cartItems.push(
            {
              claid: this.data.homeclaid,
              ishaveChild: true,
              children: [
                {
                  id: e.target.dataset.id,
                  title: e.target.dataset.title,
                  image: e.target.dataset.image,
                  currentprice: e.target.dataset.currentprice,
                  value: 1,
                  selected: true
                }
              ]
            })
        }
      } else {
        cartItems.push(
          {
            claid: this.data.homeclaid,
            ishaveChild: true,
            children: [
              {
                id: e.target.dataset.id,
                title: e.target.dataset.title,
                image: e.target.dataset.image,
                currentprice: e.target.dataset.currentprice,
                value: 1,
                selected: true
              }
            ]
          })
      }
    } else {
      cartItems.push(
        {
          claid: this.data.homeclaid,
          ishaveChild: true,
          children: [
            {
              id: e.target.dataset.id,
              title: e.target.dataset.title,
              image: e.target.dataset.image,
              currentprice: e.target.dataset.currentprice,
              value: 1,
              selected: true
            }
          ]
        })
    }

    wx.showToast({
      title: "加入购物车成功！",
      duration: 1000
    })

    //更新缓存数据
    wx.setStorageSync("cartItems", cartItems)

  },

  onLoad: function (option) {
    var that = this
    var homeid = option.id
    var homeclaid = option.claid
    var Homedata = getApp().globalData.bookinfo[homeclaid].children[homeid];
    //console.log(Homedata)//获取到传过来的claid id去查询书本详情
    that.setData({
      data: Homedata,
      homeid: homeid,
      homeclaid: homeclaid
    })
  }
})