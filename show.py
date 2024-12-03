#景品の残り個数一覧の表示

#データファイルの読み込み
items=[]
odds=[0.0]
odds_d=[]
nums=[]
base=0

with open("items.csv","r", encoding="SHIFT-JIS")as f:
    lines = f.readlines()
    for line in lines:
        item = line.split(",")
        item[-1] = item[-1].replace("\n","")        
        items.append(item[0])
        nums.append(int(item[1]))
        odd=float(item[2])
        base+=odd
        odds_d.append(round(odd,3))
        odds.append(round(base,3))

allstock=0
for i in range(len(nums)):
        allstock += nums[i]

for i in range(len(items)):
    if(nums[i]<10000): #壁紙のような在庫(実質)無限のものを判別する(現実的に10000以上は無限にした)
        print(items[i]+" "+str(nums[i])+"個  ")
    else:print(items[i]+"   ー")

'''
#景品なしの場合
if(allstock == 0):
    print("No stock!")
'''