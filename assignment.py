LARGE_PRICE = 6.00
EXTRA_LARGE_PRICE = 10.00
TOPPING_COSTS = [1.00, 1.75, 2.50, 3.35]
HST_RATE = 0.13

size = input("Enter pizza size (large or extra large): ").strip().lower()
if size == 'large':
    base_price = LARGE_PRICE
elif size == 'extra large':
    base_price = EXTRA_LARGE_PRICE
else:
    print("Invalid size.")
    exit()

toppings = int(input("How many toppings (1 to 4)?: "))
if not (1 <= toppings <= 4):
    print("Invalid number of toppings.")
    exit()

topping_cost = TOPPING_COSTS[toppings - 1]
subtotal = base_price + topping_cost
tax = subtotal * HST_RATE
final_cost = subtotal + tax

print(f"\nSubtotal: ${subtotal:.2f}")
print(f"Tax (HST 13%): ${tax:.2f}")
print(f"Total Cost: ${final_cost:.2f}")