import random
boterkaaseneiren = (random.choice)(["steen", "papier", "schaar"])
steenpapierschaar = input("steen, papier, schaar: ").lower()

if steenpapierschaar == boterkaaseneiren:
    print("gelijk spel probeer nog een keer")
elif steenpapierschaar == "steen" and boterkaaseneiren == "schaar":
    print("jij wint!")
elif steenpapierschaar == "steen" and boterkaaseneiren == "schaar":
    print("jij wint!")
elif steenpapierschaar == "steen" and boterkaaseneiren == "schaar":
    print("jij wint!")
else:
    print(f" jij hebt verloren :( de robot koos: {boterkaaseneiren}")
