lol = 125
test = 100
aantal_lessen = int(input("hoeveel van de 125 lessen was jij aanwezig?"))
aanwezigheid = test / lol * aantal_lessen
print(f"student was er voor {aanwezigheid}% van de lessen ")

vijf = 5

engels = float(input("geef je cijfer engels"))
wiskunde = float(input("geef je cijfer wiskunde"))
nederlands = float(input("geef je cijfer nederlands"))
gym = float(input("geef je cijfer gym"))
natuurkunde = float(input("geef je cijfer natuurkunde"))
testtest = engels + wiskunde + nederlands + gym + natuurkunde
testtesttest = testtest / vijf
print(f"het gemiddelde is {testtesttest}")
testtesttesttest = testtesttest
if testtesttesttest >= 7.8 and aanwezigheid >= 80:
    print("je bent een excellente student!")
