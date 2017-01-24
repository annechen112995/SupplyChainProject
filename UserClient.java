import org.json.JSONException;
import org.json.JSONObject;

public class User {

    private String user;
    private String password;


    @Override
    public String user() {
        return user;
    }

    @Override
    public String password() {
        return password;
    }


    public static User fromJSON(JSONObject jsonObject) {
        User u = new User();

        try {
            u.user = jsonObject.getString("User");
            u.password= jsonObject.getString("Password");

        } catch (JSONException e) {
            e.printStackTrace();
        }

        return u;
    }

}