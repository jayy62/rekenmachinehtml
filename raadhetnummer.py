import random
nummer = random.randint(1, 100)
while True:
    lol = int(input("raad het nummer: "))

    if lol > nummer:
        print("te hoog")
    elif lol < nummer:
        print("te laag")
    else:
        print("je hebt het geraden!")
        break

print(f"{nummer}")




