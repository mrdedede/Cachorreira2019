data = open("kafama_gore.txt","r")
dados = data.readlines()
arr_votos = [0,0,0]
for line in dados:
    print(len(line))
    if(line[59] == "B"):
        arr_votos[0] += 1
    elif(line[59] == "A"):
        arr_votos[1] += 1
    else:
        arr_votos[2] += 1

i = 0
while(i != 3):
    if(i == 0):
        print("Betman:", arr_votos[i])
    elif(i == 1):
        print("André:", arr_votos[i])
    else:
        print("Carlão", arr_votos[i])
    i+=1
