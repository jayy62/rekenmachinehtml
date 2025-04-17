a = float(input("number "))
b = float(input("number "))
c = input(" * + - / ")

if c == "/":
    print(f"de som is {a} / {b} is: {a / b}")

if c == "-":
    print(f"de som is {a} - {b} is: {a - b}")

if c == "*" or "x".lower():
    print(f"de som is {a} {b} is: {a * b}")

if c == "+":
    print(f"de som is {a} + {b} is: {a + b}")