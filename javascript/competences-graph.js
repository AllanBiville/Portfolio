$('.percentage').easyPieChart({
  animate: 5000,
  lineWidth: 25,
  size:200,
  barColor: '#ff4b5e',
    onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
