class A:
    def do(self):
        return 'I am from A class'


class B(A):
    def do(self):
        return 'I am from B class'


class C(A):
    def do(self):
        return 'I am from C class'


class D(B):
    def do(self):
        return 'I am from D class'


class E(C):
    def do(self):
        return 'I am from E class'


class F(B, C):
    pass


class G(D, E):
    pass


class H(G, F, B):
    pass



""" Describe the order of the mro algorithm """

print(H.__mro__)
# Result: (<class '__main__.H'>, <class '__main__.G'>, <class '__main__.D'>, <class '__main__.F'>, <class '__main__.B'>, <class '__main__.E'>, <class '__main__.C'>, <class '__main__.A'>, <class 'object'>)
