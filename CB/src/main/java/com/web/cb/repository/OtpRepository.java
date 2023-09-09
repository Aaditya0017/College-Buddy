package com.web.cb.repository;

import com.web.cb.entity.Otp;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface OtpRepository extends MongoRepository<Otp,String> {
    Otp findByEmail(String email);
    boolean existsByEmail(String email);
}
