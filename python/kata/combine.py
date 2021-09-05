def combine_together(d1, d2):
    """ Write a code to combine two dictionary adding values for common keys. """


d1 = {'a': 100, 'b': 200, 'c':300}
d2 = {'a': 300, 'b': 200, 'd':400}
print(combine_together(d1, d2))
# Expected Result: {'a': 400, 'b': 400, 'd': 400, 'c': 300}
