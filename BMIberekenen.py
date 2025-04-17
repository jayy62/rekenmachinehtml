### BMI = je gewicht (in kg) / (lengte (in meters) x lengte (in meters))
lengte = float(input("voer je lengte in meter:"))
gewicht = int(input("voer je gewicht in:"))
test = lengte * lengte
BMI = gewicht / test
bmi = round(BMI, 2)

print(f"je bmi is:{bmi}")
licht = 18.5
gemiddeld =  25
zwaar = 30


if BMI < licht:
    print("je hebt ondergewicht")

elif BMI < gemiddeld:
    print("je hebt gezond gewicht")

elif BMI < zwaar:
    print("je hebt overgewicht")

elif BMI > zwaar:
    print("je hebt ernstig overgewicht")
