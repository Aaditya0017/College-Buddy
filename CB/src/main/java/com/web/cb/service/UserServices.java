package com.web.cb.service;

import com.web.cb.entity.UserEntity;
import com.web.cb.model.Login;
import com.web.cb.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserServices {

    @Autowired
    private UserRepository userRepository;

    public void addUser(UserEntity userEntity) {
        userRepository.save(userEntity);
    }

    public boolean check(Login login) {
        UserEntity userEntity= userRepository.findByEmail(login.getEmail());
        return login.getPassword().equals(userEntity.getPassword());
    }


    public void updatePass(String email, String newpass) {
        UserEntity user = userRepository.findByEmail(email);
        user.setPassword(newpass);
        userRepository.save(user);
    }
}
