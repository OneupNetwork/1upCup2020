/**
 * Accepted
 * 873 ms 	28828 KB
 * Jul/24/2020 16:40UTC+8
 */
import java.util.*;

public class HelloWorld{

   public static void main(String []args){
        ArrayList<String> stringInput = readInput();
        ArrayList<Integer> input = getIntListFromString(stringInput.get(0));
        String input2 = stringInput.get(1);
        String[] num = input2.split("");

        int size = input.get(0);
        int count = input.get(1);

        if (count == 0) {
            for (int k=0; k < num.length; k++) {
                System.out.print(num[k]);
            }
            return;
        }

        if (size == 1) {
            System.out.print(0);
            return;
        }

        if (Double.parseDouble(input2) == 0) {
            System.out.println(0);
            return;
        }

        if (Double.parseDouble(input2) == 1) {
            System.out.println(0);
            return;
        }

        for (int j = 0; j < num.length; j++) {
            if (count > 0) {
                if (j == 0) {
                    if (Double.parseDouble(num[j]) > 1) {
                        num[j] = "1";
                        count--;
                    }
                }
                else if (Double.parseDouble(num[j]) >= 1) {
                    num[j] = "0";
                    count--;
                }
            }
            else {
                break;
            }
        }
        for (int k=0; k < num.length; k++) {
            System.out.print(num[k]);
        }

    }



    public static ArrayList<String> readInput() {
       ArrayList<String> inputList = new ArrayList();
        Scanner sc = new Scanner(System.in);
        while (sc.hasNext()) {
          inputList.add(sc.nextLine());
        }
        return inputList;
    }

     public static ArrayList<Integer> getIntListFromString(String str){
      String[] strArray = str.split(" ");
      ArrayList<Integer> intList = new ArrayList();
      for(int i = 0; i < strArray.length; i++){
        intList.add(Integer.parseInt(strArray[i]));
      }
      return intList;
    }
}