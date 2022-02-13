import java.util.*;

public class Main {
    public static void main(String[] args) {
        /* Deklarasi variabel iterator */
        int i;
        int n = 2;

        /* Membuat objek */
        detail tim = new detail();
        detail tim2 = new detail();

        /* Input data */
        tim.setTeam("Manchester United");
        tim.setNation("England");
        tim.setFound(1876);
        tim.setPlayer(
                "GK-De Gea, RB-Dalot, CB-Varane, CB-Maguire, LB-Shaw, CM-Pogba, CM-Van de Beek, CAM-Bruno, LW-Rashford, RW-Sancho, ST-Ronaldo");

        tim2.setTeam("Manchester City");
        tim2.setNation("England");
        tim2.setFound(1880);
        tim2.setPlayer(
                "GK-Ederson, RB-Walker, CB-Stones, CB-Dias, LB-Cancelo, CM-Fernandinho, CM-Gundongan, CAM-De Bruyne, LW-Sterling, RW-Benardo, ST-Jesus");

        System.out.println("Tim 1");
        System.out.println("==============================");
        System.out.println("Nama Tim            : " + tim.getTeam());
        System.out.println("Asal Negara Tim     : " + tim.getNation());
        System.out.println("Tahun Berdiri       : " + tim.getFound());
        System.out.println("==============================");
        System.out.println("Detail Pemain");
        System.out.println("==============================");
        System.out.println(tim.getPlayer());

        System.out.println("\n");

        System.out.println("Tim 2");
        System.out.println("==============================");
        System.out.println("Nama Tim            : " + tim2.getTeam());
        System.out.println("Asal Negara Tim     : " + tim2.getNation());
        System.out.println("Tahun Berdiri       : " + tim2.getFound());
        System.out.println("==============================");
        System.out.println("Detail Pemain");
        System.out.println("==============================");
        System.out.println(tim2.getPlayer());

    }
}
