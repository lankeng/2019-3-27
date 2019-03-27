var json = require("../../data/Home_data.js")
Page({

  /**
   * 页面的初始数据
   */
  data: {
    figureone:'',
    figuretwo:'',
    figurethree:'',
    autoplay:true,
    interval:'3000',
    currentTabsIndex: 0,
    bookindex:0,
    tabs: [],
  },
  tabClick: function (event) {
    var index = event.target.dataset.index;
    if (index == 0) {
      this.setData({
        bookindex: index,
        currentTabsIndex: index
      });
    } else if (index == 1) {
      this.setData({
        bookindex: index,
        currentTabsIndex: index
      });
    } else if (index == 2) {
      this.setData({
        bookindex: index,
        currentTabsIndex: index
      });
    }

  },
  //跳转到商品详情
  btn: function (e) {
    var HomeId = e.currentTarget.dataset.id
    var HomeclaId = this.data.currentTabsIndex
     //console.log(HomeId, HomeclaId)//传claid id到详情页
    wx.navigateTo({
      url: '../../pages/book-detail/book-detail?id=' + HomeId + '&&claid=' + HomeclaId,
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    wx.showNavigationBarLoading(); //在标题栏中显示加载
    var that = this
    wx.request({
      url: 'http://localhost/bookstore/Home/Book/bookInfo',//自己的服务接口地址
      method: 'GET',
      header: {
        //'content-type': 'application/x-www-form-urlencoded' // 默认值
        'content-type': 'application/json' // 默认值
      },
      data: {},
      success: function (e) {
        //that.setData({
        //Home_data: e
        getApp().globalData.bookinfo = e.data
        that.setData({
          // childrenBooks:json.homeIndexthree,  
          books: getApp().globalData.bookinfo,
          //tabs: getApp().globalData.bookinfo[0].cate_name.concat(getApp().globalData.bookinfo[1].cate_name).concat(getApp().globalData.bookinfo[2].cate_name)
        }); 
        for (var i = 0; i < 3; i++) {
          that.setData({
            tabs: that.data.tabs.concat(getApp().globalData.bookinfo[i].cate_name)
          })
        }
        //});

        wx.request({
          url: 'http://localhost/bookstore/Home/Figure/figure',
          method: 'GET',
          header: {
            'content-type': 'application/json' // 默认值
          },
          data: {},
          success:(e)=>{
            //console.log(e.data);//查看获取轮播图数据接口
            var figureone = e.data[0].figureone;
            var figuretwo = e.data[0].figuretwo;
            var figurethree = e.data[0].figurethree
            that.setData({
              figureone: figureone,
              figuretwo: figuretwo,
              figurethree: figurethree
            })
          },
          complete: function () {
            wx.hideNavigationBarLoading()
          }
        })
      },
      // complete:function(){
      //   wx.hideNavigationBarLoading()
      // },
      fail: function () {
        console.log('系统错误')
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
    wx.request({
      url: 'http://localhost/bookstore/Home/Book/bookInfo',
      method: 'GET',
      header: {
        'content-type': 'application/json' // 默认值
      },
      success: (e) => {
        getApp().globalData.bookinfo = e.data
        this.setData({
          books: getApp().globalData.bookinfo,
        })
        // for (var i = 0; i < 3; i++) {
        //   this.setData({
        //     tabs: this.data.tabs.concat(getApp().globalData.bookinfo[i].cate_name)
        //   })
        // }
        wx.request({
          url: 'http://localhost/bookstore/Home/Figure/figure',
          method: 'GET',
          header: {
            'content-type': 'application/json' // 默认值
          },
          data: {},
          success: (e) => {
            console.log(e.data);
            var figureone = e.data[0].figureone;
            var figuretwo = e.data[0].figuretwo;
            var figurethree = e.data[0].figurethree
            this.setData({
              figureone: figureone,
              figuretwo: figuretwo,
              figurethree: figurethree
            })
          },
          // complete: function () {
          //   wx.hideNavigationBarLoading()
          // }
        })
      },
      complete: () => {
        wx.hideNavigationBarLoading() //完成停止加载
        wx.stopPullDownRefresh() //停止下拉刷新
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