<?php

namespace App\Classes;

/**
 * Class FakeItems
 *
 * @package App\Classes
 */
class FakeItems
{

    public static function equip_position()
    {
        return ["0","1","2","4","8","16","32","34","64","128","256","512","513","768","769"];
    }

    public static function nameid()
    {
        return ["1","2","5","10","20","30","501","502","503","504","505","506","507","508","509","510","511","512","513","514","515","516","517","518","519","520","521","522","523","525","526","528","529","530","531","532","533","534","535","536","537","538","539","544","545","546","547","548","549","550","551","553","555","558","560","561","564","576","578","579","582","587","601","602","603","604","605","606","607","608","609","610","611","612","613","614","615","616","617","618","619","620","621","622","623","624","625","626","627","628","629","630","631","632","633","634","635","636","637","638","639","640","641","642","643","644","645","656","657","658","659","661","663","664","665","666","667","668","674","678","679","685","689","694","698","701","702","703","704","705","706","707","708","709","710","711","712","713","714","715","716","717","718","719","720","721","722","723","724","725","726","727","728","729","730","731","732","733","734","735","736","737","738","739","740","741","742","743","744","745","746","747","748","749","750","751","752","753","754","756","757","901","902","903","904","905","906","907","908","909","910","911","912","913","914","915","916","917","918","919","920","921","922","923","924","925","926","928","929","930","931","932","934","935","936","937","938","939","940","941","942","943","944","945","946","947","948","949","950","951","952","953","954","955","956","957","958","959","960","961","962","963","964","965","966","967","968","969","970","971","972","973","974","975","976","978","979","980","981","982","983","984","985","986","987","988","989","990","991","992","993","994","995","996","997","998","999","1000","1001","1002","1003","1004","1005","1006","1007","1008","1009","1010","1011","1012","1013","1014","1015","1016","1017","1018","1019","1020","1021","1022","1023","1024","1025","1026","1027","1028","1029","1030","1031","1032","1033","1034","1035","1036","1037","1038","1039","1040","1041","1042","1043","1044","1045","1046","1047","1048","1049","1050","1051","1052","1053","1054","1055","1056","1057","1058","1059","1060","1061","1062","1063","1064","1065","1066","1067","1068","1088","1089","1092","1093","1094","1095","1096","1097","1098","1099","1101","1102","1103","1104","1105","1107","1108","1110","1111","1113","1114","1116","1117","1119","1120","1122","1123","1124","1125","1126","1127","1128","1129","1131","1133","1135","1136","1139","1143","1146","1152","1155","1157","1158","1160","1161","1162","1163","1164","1165","1167","1168","1169","1170","1174","1201","1202","1204","1205","1207","1208","1209","1210","1211","1214","1216","1217","1219","1220","1221","1222","1223","1226","1228","1230","1232","1234","1236","1237","1238","1239","1242","1243","1245","1247","1248","1249","1250","1251","1252","1253","1254","1255","1256","1257","1258","1259","1260","1261","1265","1270","1301","1302","1303","1304","1305","1306","1352","1353","1354","1355","1357","1358","1360","1361","1363","1364","1366","1367","1373","1401","1402","1404","1405","1406","1407","1408","1409","1410","1411","1413","1417","1451","1452","1454","1455","1457","1458","1460","1461","1463","1464","1466","1468","1471","1472","1473","1474","1501","1502","1504","1505","1507","1508","1510","1511","1513","1514","1516","1517","1519","1520","1522","1523","1524","1525","1531","1550","1551","1552","1553","1554","1555","1556","1557","1558","1559","1599","1601","1602","1604","1605","1607","1608","1610","1611","1613","1614","1615","1616","1619","1620","1621","1701","1702","1704","1705","1706","1707","1708","1710","1711","1713","1714","1715","1716","1718","1719","1720","1721","1723","1750","1751","1752","1753","1754","1755","1756","1757","1758","1759","1760","1761","1762","1763","1764","1765","1766","1767","1768","1769","1770","1771","1772","1801","1802","1804","1805","1806","1807","1808","1809","1810","1811","1812","1814","1901","1902","1903","1904","1905","1906","1907","1908","1909","1910","1911","1950","1951","1952","1953","1954","1955","1956","1957","1958","1959","1960","1961","2101","2102","2103","2104","2105","2106","2107","2108","2109","2111","2112","2113","2115","2199","2201","2202","2203","2204","2205","2206","2207","2209","2211","2212","2213","2214","2215","2217","2218","2219","2220","2221","2223","2224","2225","2226","2227","2228","2229","2230","2231","2232","2233","2234","2235","2236","2239","2240","2242","2243","2244","2245","2246","2247","2248","2249","2250","2251","2252","2253","2254","2255","2256","2257","2258","2259","2260","2261","2262","2263","2264","2265","2266","2267","2268","2269","2270","2271","2272","2273","2274","2275","2276","2277","2278","2279","2280","2281","2282","2283","2284","2285","2286","2287","2288","2289","2290","2291","2292","2293","2294","2295","2296","2298","2299","2301","2302","2303","2304","2305","2306","2307","2308","2309","2310","2311","2312","2313","2314","2315","2316","2317","2318","2319","2320","2321","2322","2323","2324","2325","2326","2327","2328","2329","2330","2331","2332","2333","2334","2335","2336","2337","2338","2339","2340","2341","2342","2343","2344","2345","2347","2349","2351","2357","2401","2402","2403","2404","2405","2406","2407","2408","2409","2410","2411","2412","2413","2414","2416","2421","2422","2501","2502","2503","2504","2505","2506","2507","2508","2509","2510","2512","2513","2514","2524","2601","2602","2603","2604","2605","2607","2608","2609","2610","2611","2612","2613","2614","2615","2616","2617","2618","2619","2620","2621","2622","2623","2624","2625","2626","2627","2628","2629","2630","2631","2634","2635","2642","2643","2644","2654","2686","2701","2703","3000","3001","3002","3113","3114","3115","3116","3117","3118","3119","3130","3131","3132","3133","3134","3150","3151","3152","3153","3154","3155","3156","3157","3158","3159","3160","3161","3162","3163","3164","3165","3166","3167","3168","3169","3170","3171","3172","3173","3174","3175","3176","3177","3178","3180","3181","3182","3183","3184","3185","3186","3187","3188","3189","3190","3191","3193","3197","3198","3199","3200","3201","3202","3280","3281","3282","3293","3294","3295","3296","3297","3298","3306","3307","3310","3311","3312","3315","3316","3317","3318","3319","3320","3321","3322","3323","3324","3325","3326","3327","3328","3400","3401","3403","3404","3405","3407","3408","3409","3410","3411","3413","3414","3415","3416","3417","3418","3419","3420","3422","3423","3424","3425","3426","3427","3428","3429","3430","3431","3432","3433","3434","3435","3436","3437","3438","3439","3441","3442","3443","3444","3445","3450","3451","3453","3454","3455","3456","3457","3458","3460","3461","3462","3463","3464","3465","3468","3469","3470","3472","3475","3476","3477","3478","3485","3486","4001","4002","4003","4004","4005","4006","4007","4008","4009","4010","4011","4012","4013","4014","4015","4016","4017","4019","4020","4021","4022","4023","4024","4025","4026","4027","4028","4029","4030","4031","4032","4033","4034","4035","4036","4037","4038","4039","4040","4041","4042","4043","4044","4045","4046","4047","4048","4049","4050","4051","4052","4053","4054","4055","4056","4057","4058","4060","4061","4062","4063","4064","4065","4066","4067","4068","4069","4070","4071","4072","4073","4074","4075","4076","4077","4078","4079","4080","4081","4082","4083","4084","4085","4086","4087","4088","4089","4090","4091","4092","4093","4094","4095","4096","4097","4098","4099","4100","4101","4102","4103","4104","4105","4106","4107","4108","4109","4110","4111","4112","4113","4114","4115","4116","4117","4118","4119","4120","4121","4122","4123","4124","4125","4126","4127","4128","4129","4131","4132","4133","4134","4135","4136","4138","4139","4140","4141","4142","4143","4144","4145","4146","4147","4148","4149","4151","4152","4153","4156","4157","4158","4159","4160","4162","4163","4164","4165","4166","4167","4169","4172","4174","4175","4176","4177","4178","4180","4182","4183","4184","4185","4186","4187","4188","4190","4191","4192","4193","4195","4196","4197","4198","4199","4200","4202","4203","4204","4205","4206","4207","4208","4209","4210","4211","4212","4214","4215","4217","4218","4220","4221","4223","4224","4225","4227","4228","4229","4230","4231","4233","4234","4235","4237","4238","4241","4242","4243","4244","4245","4246","4247","4248","4249","4251","4252","4253","4254","4255","4256","4257","4258","4259","4260","4261","4262","4264","4265","4266","4267","4268","4269","4271","4272","4273","4274","4275","4277","4278","4279","4280","4281","4282","4283","4284","4285","4287","4288","4289","4290","4291","4292","4293","4294","4295","4296","4297","4299","4300","4301","4303","4304","4306","4307","4308","4309","4310","4311","4312","4313","4314","4316","4319","4320","4322","4323","4325","4326","4327","4328","4329","4330","4331","4346","4347","4348","4349","4350","4351","4360","4365","4370","4371","4372","4373","4374","4375","4399","5001","5002","5003","5004","5005","5006","5007","5008","5009","5010","5011","5012","5013","5014","5015","5016","5017","5018","5019","5020","5021","5022","5023","5024","5025","5026","5027","5028","5029","5030","5031","5032","5033","5034","5035","5036","5037","5038","5039","5040","5041","5042","5043","5045","5046","5047","5048","5049","5050","5051","5052","5053","5054","5057","5058","5059","5060","5061","5062","5063","5064","5065","5067","5068","5069","5070","5071","5073","5074","5075","5076","5077","5078","5079","5080","5081","5082","5083","5084","5085","5086","5087","5088","5089","5090","5091","5092","5094","5099","5100","5102","5103","5104","5107","5108","5109","5110","5111","5112","5114","5115","5116","5118","5119","5120","5121","5122","5123","5124","5130","5131","5132","5134","5138","5139","5140","5143","5146","5147","5148","5150","5151","5152","5153","5159","5170","5171","5172","5173","5174","5176","5181","5182","5183","5184","5185","5186","5187","5188","5189","5191","5192","5194","5196","5197","5198","5199","5200","5201","5202","5203","5204","5205","5207","5208","5209","5210","5211","5212","5213","5214","5218","5219","5221","5226","5228","5229","5230","5231","5232","5233","5234","5235","5236","5237","5238","5239","5240","5241","5242","5252","5253","5254","5255","5257","5258","5259","5260","5261","5262","5263","5264","5269","5270","5271","5273","5274","5275","5276","5277","5278","5279","5280","5281","5282","6000","6001","6002","6004","6005","6007","6008","6010","6011","6012","6505","6506","6507","6508","6510","6514","6515","6516","6517","6518","6530","6531","6532","6600","6601","6604","6605","6606","6607","6608","6609","6610","7001","7002","7003","7004","7005","7006","7007","7008","7009","7010","7011","7012","7013","7014","7015","7016","7017","7018","7019","7020","7021","7022","7023","7024","7026","7027","7030","7031","7032","7033","7034","7035","7036","7038","7041","7043","7047","7048","7049","7053","7054","7062","7063","7064","7065","7066","7067","7068","7069","7070","7071","7072","7075","7076","7079","7083","7084","7085","7086","7093","7094","7095","7096","7097","7098","7099","7101","7104","7105","7106","7107","7108","7110","7111","7112","7113","7114","7115","7116","7117","7118","7119","7120","7121","7122","7123","7124","7125","7126","7127","7128","7129","7130","7131","7132","7133","7134","7135","7136","7137","7138","7139","7140","7141","7142","7143","7144","7149","7150","7151","7152","7153","7154","7155","7156","7157","7158","7159","7161","7162","7163","7164","7165","7166","7167","7168","7169","7170","7171","7172","7186","7190","7195","7197","7198","7202","7203","7206","7214","7219","7224","7225","7312","7317","7320","7322","7325","7326","7337","7340","7346","7347","7419","7421","7422","7433","7435","7436","7437","7438","7439","7440","7441","7442","7443","7444","7445","7446","7447","7448","7449","7450","7451","7455","7478","7479","7480","7484","7507","7510","7511","7512","7513","7521","7522","7523","7524","7549","7561","7562","7563","7564","7565","7567","7568","7575","7576","7577","7721","9001","9002","9003","9004","9005","9007","9008","9009","9010","9011","9012","9013","9014","9015","9016","9017","9018","9019","9020","9021","9022","9023","9024","9025","9027","9030","9032","9034","9056","9058","9069","9080","9082","9088","9089","9090","9103","9114","9115","9125","9129","9140","9149","10001","10002","10003","10004","10005","10006","10007","10008","10009","10010","10011","10012","10013","10014","10015","10016","10017","10018","10019","10020","12004","12009","12018","12040","12059","12060","12074","12080","12085","12086","12096","12099","12100","12103","12111","12120","12128","12132","12134","12183","12188","12191","12200","12210","12221","12245","12906","12919","12928","13000","13003","13006","13009","13011","13013","13015","13017","13101","13102","13103","13104","13105","13106","13150","13151","13152","13154","13155","13156","13157","13158","13159","13160","13161","13162","13167","13200","13201","13202","13203","13204","13205","13206","13207","13250","13251","13252","13253","13254","13255","13256","13257","13258","13259","13300","13301","13302","13303","14524","15000","15001","15002","15003","15010","15011","15012","15013","15015","15016","15020","15021","15022","15023","15024","18087","19022","19023","19030","19034","19035","19036","19038","19045","19047","19051","19053","19059","19064","19070","19096","19122","19124","19226","19227","19327","19328","19330","19389","19448","19456","19457","21700","21701","21702","21703","21704","21705","22023","22027","22028","22029","22030","22031","22032","22033","22103","22114","22115","22116","22117","22505","22506","22507","22508","22509","22510","22511","22512","22513","22514","22515","22516","22517","22521","22523","22525","22528","22529","22530","22531","22535","22536","22537","22540","22541","22544","22545","22546","22547","22548","22549","22550","22551","22552","22553","22554","22555","22556","22557","22558","22559","22560","22561","22562","22563","22564","22565","22566","22567","22568","22569","22570","22571","22572","22573","22574","22575","22576","22577","22578","22579","22580","22581","22582","22583","22584","22585","22586","22587","22588","22589","22590","22591","22592","22593","22594","22595","22596","22598","22599","22600","22601","22602","22603","22604","22605","22606","22607","22608","22609","22610","22611","22612","22613","22614","22615","22617","22618","22619","22620","22621","22622","22623","22624","22625","22626","22627","22628","22629","22630","22631","22632","22633","22634","22635","22636","22637","22638","22639","22641","22643","22644","22645","22646","22647","22648","22649","22650","22651","22654","22655","22656","22657","22658","22659","22660","22661","22662","22663","22664","22666","22668","22669","22671","22673","22675","22676","22677","22678","22680","22681","22685","22686","22688","22689","22690","22691","22692","22693","22694","22695","22697","22699","22800","31000"];
    }

    public static function card()
    {
        return ["254","255","3162","4001","4002","4003","4004","4005","4006","4007","4008","4009","4010","4011","4012","4013","4014","4015","4016","4017","4019","4020","4021","4022","4024","4025","4026","4027","4028","4029","4030","4031","4032","4033","4035","4036","4037","4038","4039","4040","4043","4044","4045","4046","4047","4048","4049","4050","4051","4052","4053","4054","4055","4056","4057","4058","4060","4061","4063","4064","4065","4066","4068","4069","4070","4071","4072","4073","4074","4076","4077","4078","4079","4080","4081","4082","4084","4085","4086","4087","4088","4089","4090","4091","4092","4093","4094","4095","4096","4097","4098","4099","4100","4101","4102","4103","4104","4105","4106","4107","4108","4109","4110","4111","4112","4113","4114","4115","4116","4117","4118","4119","4120","4121","4122","4123","4124","4126","4127","4128","4129","4131","4132","4133","4135","4136","4138","4139","4140","4141","4142","4143","4145","4146","4147","4148","4149","4152","4153","4156","4157","4158","4159","4160","4162","4163","4165","4166","4169","4172","4174","4175","4176","4178","4183","4184","4185","4186","4187","4188","4190","4191","4195","4196","4197","4198","4199","4200","4202","4204","4205","4206","4207","4208","4209","4210","4211","4212","4214","4215","4217","4218","4220","4221","4223","4224","4228","4229","4230","4231","4233","4234","4235","4236","4237","4238","4239","4241","4242","4244","4245","4246","4248","4252","4253","4254","4255","4256","4257","4258","4259","4261","4262","4264","4265","4267","4268","4271","4273","4274","4275","4278","4280","4281","4282","4283","4287","4288","4290","4292","4293","4294","4296","4297","4299","4301","4302","4303","4306","4309","4311","4312","4313","4314","4319","4322","4323","4325","4327","4328","4329","4330","4334","4346","4347","4348","4349","4350","4351","4370","4371","4372","4373","4374","4399","4403","6604","6605","6606","6607","6608","6609"];
    }

}