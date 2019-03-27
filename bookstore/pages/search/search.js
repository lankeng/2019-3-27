Page({

  /**
   * 页面的初始数据
   */
  data: {
    searchGoods: "搜索商品",
    search: "取消",
    keyword: null,
    title: '',
    searchbook:[],
    centent_Show:true,  
    // searchild:'1'
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    
  },
  todetail:function(e){
    var HomeId = e.currentTarget.dataset.indexid
    var HomeclaId = parseInt(e.currentTarget.dataset.indexclaid)
    console.log(HomeId, HomeclaId)
    wx.navigateTo({
      url: '../../pages/book-detail/book-detail?id=' + HomeId + '&&claid=' + HomeclaId,
    })
  },

  getInput: function (e) {
    this.setData({ keyword: e.detail.value });
    var keyword = this.data.keyword;
    //console.log(keyword)//获取输入值
    if (keyword) {
      this.setData({ search: "搜索" });
    } else {
      this.setData({ search: "取消" });
    }
  },
  search: function () {
    var that = this;
    var keyword = this.data.keyword;
    var k = 0;
    if (!keyword) {
      wx.navigateBack();
    } else {
      //请求服务器数据
      wx.request({
        url: 'http://localhost/bookstore/Home/Book/bookInfo',//这里填写后台给你的搜索接口
        data: {
          title: keyword,
        },
        header: {
          'content-type': 'application/json' // 默认值
        },
        success: function (res) {
          console.log(res.data)//获取搜索到的商品
          that.setData({
            searchbook: res.data
          });
          for (var i = 0; i < res.data.length;i++){
            if (res.data[i].children !== undefined){
              k++;
            }
          }
          if(k == 0){
            that.setData({
              centent_Show: false
            })
          }else{
            that.setData({
              centent_Show: true
            })
          }
        },
        fail: function (e) {
          wx.showToast({
            title: '网络异常！',
            duration: 2000
          });
        }
      })
    }
 
  },
  //  getform:function(e){
  //    var that = this;
  //    let title;
  //    that.setData({
  //      title: e.detail.value.searchtitle
  //    })
  //    console.log(e.detail.value.searchtitle)
  //  },
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