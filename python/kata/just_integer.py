def just_integer(collection):
    """ Write a code to filter collection to get integer values
    using Python filter and local function. """


c = ['Kourosh', 1, None, True, [], 2, 3, ()]

assert just_integer(c) == [1, 2, 3]
