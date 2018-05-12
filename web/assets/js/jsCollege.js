var collegeInit = function(_cc, _xy, _zy, defaultcc, defaultxy, defaultzy)  
{  
    var cc = document.getElementById(_cc);  
    var xy = document.getElementById(_xy);  
    var zy = document.getElementById(_zy);  
      
    function collegeSelect(college, str)  
    {  
        for(var i=0; i<college.options.length; i++)  
        {  
            if(college.options[i].value == str)  
            {  
                college.selectedIndex = i;  
                return;  
            }  
        }  
    }  
    function collegeAddOption(college, str, obj)  
    {  
        var option = document.createElement("OPTION");  
        college.options.add(option);  
        option.innerText = str;  
        option.value = str;  
        option.obj = obj;  
    }  
      
    function changexy()  
    {  
        zy.options.length = 0;  
        if(xy.selectedIndex == -1)return;  
        var item = xy.options[xy.selectedIndex].obj;  
        for(var i=0; i<item.zyList.length; i++)  
        {  
            collegeAddOption(zy, item.zyList[i], null);  
        }  
        collegeSelect(zy, defaultzy);  
    }  
    function changecc()  
    {  
        xy.options.length = 0;  
        xy.onchange = null;  
        if(cc.selectedIndex == -1)return;  
        var item = cc.options[cc.selectedIndex].obj;  
        for(var i=0; i<item.xyList.length; i++)  
        {  
            collegeAddOption(xy, item.xyList[i].name, item.xyList[i]);  
        }  
        collegeSelect(xy, defaultxy);  
        changexy();  
        xy.onchange = changexy;  
    }  
      
    for(var i=0; i<ccList.length; i++)  
    {  
        collegeAddOption(cc, ccList[i].name, ccList[i]);  
    }  
    collegeSelect(cc, defaultcc);  
    changecc();  
    cc.onchange = changecc;  
}  
  
var ccList = [ 
{name:'本科', xyList:[           
{name:'机械工程学院', zyList:['机械设计制造及其自动化','工程力学','能源与动力工程','工业设计']},
{name:'精密仪器与光电子工程学院', zyList:['测控技术与仪器','光电信息科学与工程','生物医学工程','电子科学与技术（光电子技术）','光电信息科学与工程（天南大合办）']},
{name:'电气自动化与信息工程学院', zyList:['电气工程及其自动化','自动化','电子信息工程','通信工程','物联网工程']},
{name:'微电子学院', zyList:['电子科学与技术（固体电子与微电子）','集成电路设计与集成系统']},
{name:'建筑工程学院', zyList:['土木工程','港口航道与海岸工程','水利水电工程','船舶与海洋工程']},
{name:'建筑学院', zyList:['建筑学','城乡规划','环境设计']},
{name:'化工学院', zyList:['化学工程与工艺','分子科学与工程','制药工程','过程装备与控制工程','食品科学与工程','生物工程','应用化学（工）']},
{name:'材料科学与工程学院', zyList:['材料科学与工程','材料成型及控制工程','功能材料']},
{name:'管理与经济学部', zyList:['工商管理','财务管理','金融学','工业工程','物流工程','信息管理与信息系统','信息管理与信息系统（保密方向）','电子商务','工程管理']},
{name:'理学院', zyList:['应用物理学','应用化学']},
{name:'外国语言与文学学院', zyList:['英语','汉语言文学']},
{name:'药物科学与技术学院', zyList:['药学']},
{name:'教育学院', zyList:['教育学']},
{name:'环境科学与工程学院', zyList:['建筑环境与能源应用工程','环境科学','环境工程']},
{name:'计算机科学与技术学院', zyList:['计算机科学与技术']},
{name:'软件学院', zyList:['软件工程','动画']},
{name:'生命科学学院', zyList:['生物科学']},
{name:'海洋科学与技术学院', zyList:['海洋技术']},
{name:'法学院', zyList:['法学']}, 
{name:'数学学院', zyList:['数学与应用数学']}          
]}, 

{name:'硕士', xyList:[           
{name:'机械工程学院', zyList:['一般力学与力学基础','固体力学','流体力学','工程力学','生物力学','机械工程','风能工程','工业设计','工程热物理','热能工程','动力机械及工程','制冷及低温工程','环境能源工程','桥梁与隧道工程','机械工程（专业学位）','动力工程（专业学位）','车辆工程（专业学位）','工业设计工程（专业学位）']},
{name:'精密仪器与光电子工程学院', zyList:['光学工程','光电子与光子学技术','仪器科学与技术','生物医学工程','医学物理学','光学工程（专业学位）','仪器仪表工程（专业学位）','生物医学工程（专业学位）']},
{name:'电气自动化与信息工程学院', zyList:['电气工程','控制科学与工程','电气工程（专业学位）','控制工程（专业学位）']},
{name:'电子信息工程学院', zyList:['电路与系统','微电子学与固体电子学','电磁场与微波技术','信息与通信工程','电子与通信工程（专业学位）','集成电路工程（专业学位）']},
{name:'建筑工程学院', zyList:['土木工程','岩土工程','水利工程','风能工程','船舶与海洋工程','建筑与土木工程（专业学位）','水利工程（专业学位）','船舶与海洋工程（专业学位）']},
{name:'建筑学院', zyList:['建筑学','城乡规划学','风景园林学','建筑学（专业学位）','建筑与土木工程（专业学位）','城市规划（专业学位）','风景园林（专业学位）','美术学','设计学','艺术（专业学位）']},
{name:'化工学院', zyList:['生物化学与分子生物学','材料学','化工过程机械','化学工程','化学工艺','生物化工','应用化学','工业催化','合成生物学','制药工程','能源化工','材料化工','发酵工程','生物医学工程','食品科学','化学工程（专业学位）','制药工程（专业学位）','生物工程（专业学位）']},
{name:'材料科学与工程学院', zyList:['材料学','材料加工工程','高分子材料科学与工程','材料工程（专业学位）']},
{name:'管理与经济学部', zyList:['应用经济学','金融（专业学位）','资产评估（专业学位）','系统工程','工业工程（专业学位）','物流工程（专业学位）','管理科学与工程','工商管理','公共管理','情报学','工商管理（专业学位）','公共管理（专业学位）','工程管理（专业学位）']},
{name:'理学院', zyList:['基础数学','计算数学','概率论与数理统计','应用数学','运筹学与控制论','理论物理','凝聚态物理','光学','化学','生物物理学','材料物理与化学','化学工程','应用化学']},
{name:'外国语言与文学学院', zyList:['语言学及应用语言学','中国现当代文学','外国语言学及应用语言学','翻译（专业学位）']},
{name:'药物科学与技术学院', zyList:['药学','药学（专业学位）','卫生事业与药事管理']},
{name:'教育学院', zyList:['教育学','跨文化教育','研究生教育学','应用心理学','教育管理（专业学位）','现代教育技术（专业学位）','职业技术教育（专业学位）','汉语国际教育（专业学位）','教育经济与管理']},
{name:'环境科学与工程学院', zyList:['遗传学','热能工程','市政工程','供热、供燃气、通风及空调工程','环境科学','环境工程','环境能源工程','环境信息与规划管理','环境生态学','海洋环境科学与技术','建筑与土木工程（专业学位）','环境工程（专业学位）']},
{name:'计算机科学与技术学院', zyList:['模式识别与智能系统','计算机科学与技术','软件工程','计算机技术（专业学位）']},
{name:'软件学院', zyList:['软件工程','软件工程（专业学位）']},
{name:'生命科学学院', zyList:['生物学']},
{name:'海洋科学与技术学院', zyList:['海洋科学','海洋环境科学与技术']},
{name:'法学院', zyList:['法学','法律（非法学）（专业学位）','法律（法学）（专业学位）']}, 
{name:'马克思主义学院', zyList:['中国哲学','科学技术哲学','中共党史','马克思主义理论']},
{name:'国际工程师学院', zyList:['电子与通信工程（专业学位）','计算机技术（专业学位）','建筑与土木工程（专业学位）']},
{name:'表层地球系统科学研究院', zyList:['地质学']}        
]},

{name:'博士', xyList:[           
{name:'机械工程学院', zyList:['一般力学与力学基础','固体力学','流体力学','工程力学','生物力学','机械工程','工业设计','工程热物理','动力机械及工程','制冷及低温工程']},
{name:'精密仪器与光电子工程学院', zyList:['光学工程','光电子与光子学技术','仪器科学与技术','生物医学工程','医学物理学']},
{name:'电气自动化与信息工程学院', zyList:['电气工程','控制科学与工程','电路与系统','微电子学与固体电子学','电磁场与微波技术','信息与通信工程']},
{name:'建筑工程学院', zyList:['结构工程','岩土工程','防灾减灾工程及防护工程','桥梁与隧道工程','工程技术与管理','水利工程','风能工程','船舶与海洋工程','工程管理']},
{name:'建筑学院', zyList:['建筑学','城乡规划学','风景园林学']},
{name:'化工学院', zyList:['化工过程机械','化学工程','化学工艺','生物化工','应用化学','工业催化','合成生物学','制药工程','能源化工','材料化工']},
{name:'材料科学与工程学院', zyList:['材料学','材料加工工程','高分子材料科学与工程']},
{name:'管理与经济学部', zyList:['系统工程','管理科学与工程','工商管理','公共管理']},
{name:'理学院', zyList:['数学','化学','生物物理学','材料物理与化学']},
{name:'药物科学与技术学院', zyList:['应用化学','卫生事业与药事管理']},
{name:'教育学院', zyList:['职业技术教育学']},
{name:'环境科学与工程学院', zyList:['遗传学','热能工程','市政工程','供热、供燃气、通风及空调工程','环境科学','环境工程','室内环境学','环境能源工程','环境信息与规划管理','环境生态学','海洋环境科学与技术']},
{name:'计算机科学与技术学院', zyList:['计算机软件与理论','计算机应用技术','软件工程']},
{name:'软件学院', zyList:['软件工程']},
{name:'生命科学学院', zyList:['生物学']},
{name:'海洋科学与技术学院', zyList:['海洋环境动力学','海洋环境科学与技术']},
{name:'表层地球系统科学研究院', zyList:['环境科学']}        
]}
  
];  