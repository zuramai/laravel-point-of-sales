import { Line } from 'vue-chartjs'

export default {
  extends: Line,
  name: "line-chart",
  props: ['chartData','options'],
  mounted () {
    // Overwriting base render method with actual data.
    this.renderChart(this.chartData, this.options)
  }
}