# for i in range(4):
#     for j in range(4):
#         if j <= i:
#             print("*", end="")
#         else:
#             print(" ", end="")
#     print()


# for i in range(4):
#     for j in range(4):
#         if j <= 3-i:
#             print("*", end="")
#         else:
#             print(" ", end="")
#     print()


# for i in range(20):
#     for j in range(20):
#         if j ==i or j == 19-i:
#             print("*", end="")
#         else:
#             print(" ", end="")
#     print()



for i in range(4):
    for j in range(7):
        if j >= 3-i and j <= 3+i:
            print("*", end="")
        else:
            print(" ", end="")
    print()