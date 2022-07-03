while(True):
    name1=input('Enter name1: ')
    name2=input('Enter name2: ')
    n1=name1
    n2=name2
    for  i in  name1:
        if i in name2:
            name1=name1.replace(i,'',1)
            name2=name2.replace(i,'',1)
    count=len(name1)+len(name2)
    print(count)
    flames='FLAMES'
    while(len(flames)!=1):
        if(count<len(flames)):
            flames=flames[count:]+flames[:count]
            flames=flames.rstrip(flames[-1])
        elif(count==len(flames)):
            flames=flames.rstrip(flames[-1])
        else:
            temp=count
            while(temp>len(flames)):
                temp=temp-len(flames)
            flames=flames[temp:]+flames[:temp]
            flames=flames.replace(flames[-1],'')

    if(flames=='F'):
        print(n1,'and',n2,'are friends')
    elif(flames=='L'):
        print(n1,'and',n2,'are lovers')
    elif(flames=='A'):
        print(n1,'have','affection on ',n2)
    elif(flames=='M'):
        print(n1,'will marry',n2)
    elif(flames=='E'):
        print(n1,'and',n2,'are enemies')
    elif(flames=='s'):
        print(n1,'and',n2,'are sibilings')

        
