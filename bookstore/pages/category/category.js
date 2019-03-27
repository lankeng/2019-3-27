var json = require("../../data/Home_data.js")

Page({

  /**
   * 页面的初始数据
   */
  data: {
    btn_search: "搜索商品",
    cateItems:[],
    curNav: 0,
    curIndex: 0
  },

  switchRightTab: function (e) {
    // 获取item项的id，和数组的下标值 
    let claid = e.target.dataset.claid,
      index = parseInt(e.target.dataset.index);
    // 把点击到的某一项，设为当前index 
    //console.log(claid,index)//获取点击索引
    this.setData({
      curNav: index,
      curIndex: index
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    //console.log(getApp().globalData.bookinfo[0])//获取全局变量getApp().globalData.bookinfo
    this.setData({
      cateItems: getApp().globalData.bookinfo
    })
    
  },
  sebtn:function(e){
    var HomeId = e.currentTarget.dataset.index
    var HomeclaId = this.data.curIndex
    console.log(HomeId, HomeclaId)
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