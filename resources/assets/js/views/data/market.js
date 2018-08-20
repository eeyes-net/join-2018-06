import { parse } from './util'

const text0 = '策划一次亲自主导的活动？完成一份漂亮的策划文案？在展示台上摆出一份漂亮的ppt并侃侃而谈？市场部给你平台绽放你的光彩！\n\
我们有从不正经但是很可爱的主管，有一样怀揣着梦想的员工，有不定时的饭局夜宵。\n\
这里有e瞳家文化的传承\n\
这里，将是你在交大的另一个温暖港湾，有力臂膀。'

const text1 = '1.我们开展了关于e瞳网产品的相关推广，e学堂和e快下，都在交大校园中帮助同学更好地去学习\n\
2.我们策划了几乎所有部门内部的活动，无论是饺子宴，还是春游，都让大家感受到了家的感觉。\n\
3.我们积极的在校外找寻赞助，为部门建设添砖加瓦\n\
4.我们相应学校团工委的和习总书记的要求，开展了全校范围的有关寻找西迁记忆的寻宝思源活动'

const text2 = '1.让e瞳已有的产品为大家带来应有的福利\n\
2.将新的项目“工程坊”做成一系列的活动\n\
3.努力为部门间的联系策划有意义的活动\n\
4.开展更多类似于寻宝思源的大型活动，学习和弘扬交大精神、中国精神'

const text3 = '1.在这里，你将无拘无束\n\
2.在这里，你能够走出宿舍的堕落，见到更多有趣的同学\n\
3.在这里，你将能练就好的排版和策划\n\
4.在这里，桌游，夜宵，聚餐从不会缺席\n\
作为历届最活泼的部门，we are 伐木累！'

const text4 = '1.有良好的交际能力（得会尬聊，哈哈哈）\n\
2.有走出宿舍的决心，想见见交大不一样的风景\n\
3.有点word等功底最好啦~没有问题也不大，我们会教你\n\
4.有责任心，想让大学生活不在只是单调的学习，加入我们吧（我们一起浪~）\n\
大学，是另一个世界，这里，不在只有学习，这里，还有我们，和你一同成长的人！'

export const texts = [
    parse(text0),
    parse(text1),
    parse(text2),
    parse(text3),
    parse(text4),
]