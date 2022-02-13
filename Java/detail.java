public class detail {
    /* Deklarasi atribut */
    private String name;
    private String nation;
    private int found;
    private String player;

    /* Membuat constructor */
    public detail(String name, String nation, int found, String player) {
        this.name = name;
        this.nation = nation;
        this.found = found;
        this.player = player;
    }

    public detail() {
    }

    /* Set dan Get data nama tim sepakbola */
    public String getTeam() {
        return name;
    }

    public void setTeam(String name) {
        this.name = name;
    }

    /* Set dan Get data asal negara tim sepakbola */
    public String getNation() {
        return nation;
    }

    public void setNation(String nation) {
        this.nation = nation;
    }

    /* Set dan Get data tahun berdiri tim sepakbola */
    public int getFound() {
        return found;
    }

    public void setFound(int found) {
        this.found = found;
    }

    /* Set dan Get data nama pemain tim sepakbola */
    public String getPlayer() {
        return player;
    }

    public void setPlayer(String player) {
        this.player = player;
    }
}
