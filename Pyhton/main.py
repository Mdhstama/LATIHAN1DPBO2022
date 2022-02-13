from detail import detail

n = 2

# membuat array objek
tim = [detail() for i in range(n)]

# Input data
tim[0].setTeam("Manchester United")
tim[0].setNation("England")
tim[0].setFound(1876)
tim[0].setPlayer(
    "GK-De Gea, RB-Dalot, CB-Varane, CB-Maguire, LB-Shaw, CM-Pogba, CM-Van de Beek, CAM-Bruno, LW-Rashford, RW-Sancho, ST-Ronaldo")

tim[1].setTeam("Manchester City")
tim[1].setNation("England")
tim[1].setFound(1880)
tim[1].setPlayer(
    "GK-Ederson, RB-Walker, CB-Stones, CB-Dias, LB-Cancelo, CM-Fernandinho, CM-Gundongan, CAM-De Bruyne, LW-Sterling, RW-Benardo, ST-Jesus")

# menampilkan hasil
for i in range(n):
    print("==============================")
    print("Nama Tim             :" + str(tim[i].getTeam()))
    print("Asal Negara Tim      :" + str(tim[i].getNation()))
    print("Tahun Berdiri        :" + str(tim[i].getFound()))
    print("==============================")
    print("Detail Pemain")
    print("==============================")
    print(tim[i].getPlayer())
    print("")
