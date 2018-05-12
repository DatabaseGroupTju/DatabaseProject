

var container_1 = document.getElementById('picBody_1');
var worldMapContainer_1 = document.getElementById('pic_1');

var container_2 = document.getElementById('picBody_2');
var worldMapContainer_2 = document.getElementById('pic_2');

var container_3 = document.getElementById('picBody_3');
var worldMapContainer_3 = document.getElementById('pic_3');

var container_4 = document.getElementById('picBody_4');
var worldMapContainer_4 = document.getElementById('pic_4');

//用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
var resizeWorldMapContainer = function () {
	worldMapContainer_1.style.width = container_1.clientWidth+'px';
	worldMapContainer_1.style.height = container_1.clientHeight +'px';

	worldMapContainer_2.style.width = container_2.clientWidth+'px';
	worldMapContainer_2.style.height = container_2.clientHeight +'px';

	worldMapContainer_3.style.width = container_3.clientWidth+'px';
	worldMapContainer_3.style.height = container_3.clientHeight +'px';

	worldMapContainer_4.style.width = container_4.clientWidth+'px';
	worldMapContainer_4.style.height = container_4.clientHeight +'px';
};
//设置容器高宽
resizeWorldMapContainer();

// 基于准备好的dom，初始化echarts实例
var myChart_1 = echarts.init(worldMapContainer_1);
var myChart_2 = echarts.init(worldMapContainer_2);
var myChart_3 = echarts.init(worldMapContainer_3);
var myChart_4 = echarts.init(worldMapContainer_4);

// 指定图表的配置项和数据
var option_1 = {
	title : {
        text: '就业单位性质',
        subtext: '2017届',
        x:'center'
    },
	tooltip: {},
	xAxis: {
		data: ["民企","央企","国企","三资企业","高等教育单位",
		"党政机关","事业单位","科研院所","初、中等教育单位",
		"部队","西部计划、三支一扶、大学生村官、支教"]
	},
	yAxis: {
		name:"人数"
	},
	series: [{
		name: '人数',
		type: 'bar',
		data: [view2data01,view2data02,view2data03,view2data04,
		view2data05,view2data06,view2data07,view2data08,
		view2data09,view2data0A,view2data0B]
	}]
};

var option_2 = {
    title : {
        text: '升学单位性质',
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
        data: ['双一流院校','中科院直属院校及科研院所',
                '其他科研院所','其他重点院校','军事院校']
    },
    series : [
        {
            name: '人数',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:view1data05, name:'双一流院校'},
                {value:view1data03, name:'中科院直属院校及科研院所'},
                {value:view1data02, name:'其他科研院所'},
                {value:view1data04, name:'其他重点院校'},
                {value:view1data01, name:'军事院校'}
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

var option_3 = {
	title : {
        text: '毕业去向',
        subtext: '2017届',
        x:'center'

    },
	legend: {
		orient: 'vertical',
		left: 0,
        data: ['本科生','硕士研究生','博士研究生']
    },
	tooltip: {},
	xAxis: {
		data: ['升学','就业','出国(出境)','待就业'],
		position: 'bottom'
	},
	yAxis: {

	},
	series: [
	{
		name: '本科生',
		type: 'bar',
		center: ['50%', '60%'],
		data: [view4data11,view4data13,view4data12,view4data14]
	},
	{
		name: '硕士研究生',
		type: 'bar',
		center: ['50%', '60%'],
		data: [view4data21,view4data23,view4data22,view4data24]
	},
	{
		name: '博士研究生',
		type: 'bar',
		center: ['50%', '60%'],
		data: [view4data31,view4data33,view4data32,view4data34]
	}
	]
};


var option_4 = {
    title : {
        text: '就业行业分布',
        subtext: '2017届',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
		type:'scroll',
        orient: 'vertical',
        left: 0,
        top: 80,
        bottom: 80,
        data: ['互联网/计算机/通信/软件',
		'房地产/建筑/工程建设',
		'制造业',
		'教育',
		'科学研究/技术服务业',
		'公共管理/社会保障/社会组织',
		'金融/保险/银行',
		'电力/燃气/水的生产和供应',
		'医疗卫生/生物医药/医疗保健',
		'贸易/批发/零售',
		'能源矿产/石油化工',
		'租赁/商务服务/居民服务业',
		'水利/环境/公共设施管理',
		'交通运输/仓储/邮政',
		'广告传媒/文化娱乐/体育/出版印刷',
		'军队',
		'农/林/牧/渔业',
		]
    },
    series : [
        {
            name: '人数',
            type: 'pie',
            radius : '55%',
            center: ['65%', '50%'],
			label: {
				normal: {
					show: false,

				},
			},
			labelLine: {
				normal: {
					show: false
				}
			},
            data:[
	{value:view3data01, name:'互联网/计算机/通信/软件'},
	{value:view3data02, name:'房地产/建筑/工程建设'},
	{value:view3data03, name:'制造业'},
	{value:view3data04, name:'教育'},
	{value:view3data05, name:'科学研究/技术服务业'},
	{value:view3data06, name:'公共管理/社会保障/社会组织'},
	{value:view3data07, name:'金融/保险/银行'},
	{value:view3data08, name:'电力/燃气/水的生产和供应'},
	{value:view3data09, name:'医疗卫生/生物医药/医疗保健'},
	{value:view3data0A, name:'贸易/批发/零售'},
	{value:view3data0B, name:'能源矿产/石油化工'},
	{value:view3data0C, name:'租赁/商务服务/居民服务业'},
	{value:view3data0D, name:'水利/环境/公共设施管理'},
	{value:view3data0E, name:'交通运输/仓储/邮政'},
	{value:view3data0F, name:'广告传媒/文化娱乐/体育/出版印刷'},
	{value:view3data0G, name:'军队'},
	{value:view3data0H, name:'农/林/牧/渔业'}
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
myChart_3.setOption(option_3);
myChart_4.setOption(option_4);

var resizeChart = function () {
	myChart_1.resize();
	myChart_2.resize();
	myChart_3.resize();
	myChart_4.resize();
}

//用于使chart自适应高度和宽度
window.onresize = function () {
	//重置容器高宽
	resizeWorldMapContainer();
	resizeChart();
};
