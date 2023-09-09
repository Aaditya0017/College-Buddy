package com.web.cb.service;

import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.mail.SimpleMailMessage;
import org.springframework.mail.javamail.JavaMailSender;
import org.springframework.stereotype.Service;

import java.util.UUID;
import java.util.logging.Logger;

@Service
public class JavaMail {
    @Autowired
    private JavaMailSender mailSender;
    public void sendMail( String code, String receiver){

        String subject="otp verification";
        SimpleMailMessage message =new SimpleMailMessage();
        message.setFrom("collegebuddy4u@gmail.com");
        message.setTo(receiver);
        message.setSubject(subject);
        String body = " The otp to verify this email is " + code;
        message.setText(body);
        mailSender.send(message);
    }
}
