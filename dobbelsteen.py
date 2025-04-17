import random
dice = random.randint(1, 6)
jij = int(input("gok een nummer 1-6"))
if jij == dice:
    print("je hebt het nummer geraden!")
else:
    print("fout")
print(f"het nummer was {dice}")
