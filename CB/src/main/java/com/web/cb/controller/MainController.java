package com.web.cb.controller;

import com.web.cb.entity.UserEntity;
import com.web.cb.model.Login;
import com.web.cb.service.OtpServices;
import com.web.cb.service.UserServices;
import jakarta.servlet.http.HttpSession;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

import java.net.URLDecoder;
import java.nio.charset.StandardCharsets;

@Controller
public class MainController {
    @Autowired
    private UserServices userServices;
    @Autowired
    private OtpServices otpServices;

    @GetMapping("/")
    public String welcome(Model model){

        Login login = new Login();
        model.addAttribute("login",login);
        return "Login";
    }
    @PostMapping("/login")
    public String login(Model model,@ModelAttribute("login") Login login){
        if(userServices.check(login)) return "Home";
        else return "Login";
    }

    @PostMapping("/registration")
    public String userRegistration(@ModelAttribute("userEntity") UserEntity userEntity){
        userServices.addUser(userEntity);
        return "Home";
    }
    @GetMapping("/register")
    public String register(Model model){
        UserEntity userEntity = new UserEntity();
        model.addAttribute("userEntity",userEntity);
        return "register";
    }
    @GetMapping("/forgetPassword")
    public String forgetPassPage(Model model){
        model.addAttribute("login",new Login());
        return "ForgetPass";
    }

    @PostMapping ("/sendCode")
    @ResponseStatus(value = HttpStatus.OK)
    public void otp( @RequestBody String email){
        email = URLDecoder.decode(email, StandardCharsets.UTF_8).substring(6);
        otpServices.otp(email);
    }

    @PostMapping("/verify")
    public String forgetPass(HttpSession session, Model model, @ModelAttribute("login") Login login){
        if(otpServices.verify(login)){
            String newpass="";
            String email=login.getEmail();
            session.setAttribute("mail",email);
            model.addAttribute("login",new Login());
            model.addAttribute("pass",newpass);
            return "NewPass";
        }else {
            return "ForgetPass";
        }
    }
    @PostMapping("/newpass")
    public String newPass(HttpSession session, @ModelAttribute("login") Login login, @ModelAttribute("mail") String mail ){
        userServices.updatePass(session.getAttribute("mail").toString(),login.getPassword());
        return "Home";
    }

}
