#抽選アプリの本体
import random

#データファイルの読み込み
items=[]
odds=[0.0]
odds_d=[]
nums=[]
base=0
allstock=0

with open("items.csv","r", encoding="SHIFT-JIS")as f1:
    lines = f1.readlines()
    for line in lines:
        item = line.split(",")
        item[-1] = item[-1].replace("\n","")        
        items.append(item[0])
        nums.append(int(item[1]))
        odd=float(item[2])
        base+=odd
        odds_d.append(round(odd,3))
        odds.append(round(base,3))
for i in range(len(nums)):
        allstock += nums[i]

ifstock = 0
if(allstock>0):
    while(ifstock==0): #在庫があるものに当たるか全在庫がないと分かるまで
        r = random.random()*100
        num = 0
        for i in range(0,len(odds)-1):
            if(i<len(odds)):
                a = odds[i]
                b = odds[i+1]
                if(a<=r and r<b): #i番目の区間[odds[i],odds[i+1])に存在するかどうか
                    if(nums[i]>0): #在庫があるかどうか
                        ifstock = 1 #在庫がなければやり直し
                        num = i
                        nums[i]-=1 #在庫の変更
                        allstock-=1
        if(ifstock>0): print("当選品:"+items[num])
else:print("NO STOCK")


#データの変更
with open("items.csv","w", encoding="SHIFT-JIS")as f2:
    for i in range(len(items)):
        f2.write(items[i]+","+str(nums[i])+","+str(odds_d[i])+"\n")
