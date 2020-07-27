/**
 * Accepted
 * 343 ms 	26340 KB
 * Jul/24/2020 15:53UTC+8
 */
import java.util.*;

public class HelloWorld{

   public static void main(String []args){
        ArrayList<String> stringInput = readInput();
        ArrayList<Integer> intInput = getIntListFromString(stringInput.get(1));

        int size = Integer.parseInt(stringInput.get(0));

        int max = 1;
        int cur = 1;
        for (int i = 0; i < size; i++) {
            if (i == size - 1) {
                System.out.println(max);
                break;
            }
            if (intInput.get(i+1) < intInput.get(i)) {
                cur = 1;
            }
            else {
               cur++;
               if (cur > max) {
                    max = cur;
               }
            }
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