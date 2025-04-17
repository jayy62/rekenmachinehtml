naam = input("wat is je naam? ")
printt = int(input("hoe vaak wil je je naam willen printen? min 1x max 200x: "))

if printt <= 200:
    for nmmr in range(printt):
        print(f"{nmmr + 1} {naam}")
else:
    print("dit is geen geldige invoer")

