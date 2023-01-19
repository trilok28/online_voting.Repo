class Information{
	private String str;
	public Information(String x){
		this.str = x;
	}
	public void displayInfo(){
		System.out.println(str);
	}	
}

class Driver{
	public static void main(String[] argval){
		Information info = new Information("info123");
		info.displayInfo();
	}
}