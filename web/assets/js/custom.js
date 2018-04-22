

var container_1 = document.getElementById('picBody_1');
var worldMapContainer_1 = document.getElementById('pic_1');

var container_2 = document.getElementById('picBody_2');
var worldMapContainer_2 = document.getElementById('pic_2');

//用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
var resizeWorldMapContainer = function () {
	worldMapContainer_1.style.width = container_1.clientWidth+'px';
	worldMapContainer_1.style.height = container_1.clientHeight +'px';
	
	worldMapContainer_2.style.width = container_2.clientWidth+'px';
	worldMapContainer_2.style.height = container_2.clientHeight +'px';
};
//设置容器高宽
resizeWorldMapContainer();

// 基于准备好的dom，初始化echarts实例
var myChart_1 = echarts.init(worldMapContainer_1);
var myChart_2 = echarts.init(worldMapContainer_2);

// 指定图表的配置项和数据
var option_1 = {
	title : {
        text: '就业单位性质',
        subtext: '2017届',
        x:'center'
    },
	tooltip: {},
	legend: {
		data:['销量']
	},
	xAxis: {
		data: ["民企","央企","国企","三资企业","高等教育单位","党政机关","事业单位","科研院所","初、中等教育单位","部队","西部计划、三支一扶、大学生村官、支教"]
	},
	yAxis: {
		name:"人数"
	},
	series: [{
		name: '人数',
		type: 'bar',
		data: [1629,977,789,738,373,253,169,86,55,32,5]
	}]
};

var option_2 = {
    title : {
        text: '就业去向',
        subtext: '2017届',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: ['升学','就业','出国（出境）','待就业']
    },
    series : [
        {
            name: '人数',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:1869, name:'升学'},
                {value:5347, name:'就业'},
                {value:617, name:'出国（出境）'},
                {value:98, name:'待就业'}
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};

// 使用刚指定的配置项和数据显示图表。
myChart_1.setOption(option_1);
myChart_2.setOption(option_2);

var resizeChart = function () {
	myChart_1.resize();
	myChart_2.resize();
}

//用于使chart自适应高度和宽度
window.onresize = function () {
	//重置容器高宽
	resizeWorldMapContainer();
	resizeChart();
};