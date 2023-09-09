package com.web.cb.entity;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.annotation.Collation;

@Collation("otp")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Otp {
    @Id
    private String  id;
    private String email;
    private String otp;
}
