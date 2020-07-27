
# Accepted
# 109 ms 	6796 KB
# Jul/24/2020 15:51UTC+8

#input1 = input().split()

input1 = input()
input2 = input().split()

n = [0, 0]
lennn = len(input2)
a = True
while lennn > 0:

    first = int(input2[0])

    last = int(input2[-1])

    maxnum = 0
    if first > last:
        input2.pop(0)
        maxnum = first
    else:
        input2.pop()
        maxnum = last
    if a:
        n[0] += maxnum
    else:
        n[1] += maxnum
    a = a == False
    lennn -= 1
print('%s %s' % (n[0], n[1]))
