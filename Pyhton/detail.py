class detail():
    # Deklarasi atribut private
    __name = ""
    __nation = ""
    __found = 0
    __player = ""

    # Membuat constructor
    def __init__(self, name="", nation="", found=0, player=""):
        self.__name = name
        self.__nation = nation
        self.found = found
        self.__player = player

    # Set dan Get data nama tim sepakbola
    def setTeam(self, name):
        self.__name = name

    def getTeam(self):
        return self.__name

    # Set dan Get data asal negara tim sepakbola
    def setNation(self, nation):
        self.__nation = nation

    def getNation(self):
        return self.__nation

    # Set dan Get data tahun berdiri tim sepakbola
    def setFound(self, found):
        self.__found = found

    def getFound(self):
        return self.__found

    # Set dan Get data nama pemain tim sepakbola
    def setPlayer(self, player):
        self.__player = player

    def getPlayer(self):
        return self.__player
