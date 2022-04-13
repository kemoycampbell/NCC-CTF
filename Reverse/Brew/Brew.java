import java.lang.Math;
public class Brew {

    public static void main(String[] args) throws Exception{
    
        String mess = "ids,labels,parents,Enzymatic-Flowery,Flowery,Enzymatic-Fruity,Fruity,Enzymatic-Herby,Herby,Sugar Browning-Nutty,Nutty,Sugar Browning-Carmelly,Carmelly,Sugar Browning-Chocolatey,Chocolatey,Dry Distillation-Resinous,Resinous";
        
        
        String[] options = mess.split(",");
        boolean allowed = false;
        //They just have to take a look at me and they will see how exposed I am...
        if(allowed)
            System.out.println("NCC{N0t_$0_S3creT_H3h}");
        
        while(true){
            int selection = getRandomNumber(0, options.length);
            System.out.println("May I recommend "+ options[selection]);
        }
        
        
    }
    
    public static int getRandomNumber(int min, int max) {
        return (int) ((Math.random() * (max - min)) + min);
    }
}