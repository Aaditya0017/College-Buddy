package com.web.cb.service;

import com.web.cb.entity.Otp;
import com.web.cb.model.Login;
import com.web.cb.repository.OtpRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.UUID;

@Service
public class OtpServices {
    @Autowired
    private OtpRepository otpRepository;
    @Autowired
    private JavaMail javaMail;

    public void otp(String email) {
       String code  = UUID.randomUUID().toString().substring(0,8);
       if(otpRepository.existsByEmail(email)){
           Otp otp=otpRepository.findByEmail(email);
           otp.setOtp(code);
           otpRepository.save(otp);
       }else {
           Otp otp = new Otp();
           otp.setOtp(code);
           otp.setEmail(email);
           otpRepository.save(otp);
       }
       javaMail.sendMail(code,email);
    }



    public boolean verify(Login login) {
        System.out.println(login.getEmail()+"  {}  "+login.getPassword());
        return true;
    }
}
