package com.web.cb.entity;

import lombok.*;
import org.springframework.data.annotation.Id;

import java.util.Date;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
@Data
public class UserEntity {
    @Id
    private String userId;
    private String fullName;
    private String dob;
    private String email;
    private String gender;
    private String password;
}

