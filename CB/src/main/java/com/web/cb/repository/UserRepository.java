package com.web.cb.repository;

import com.web.cb.entity.UserEntity;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface UserRepository extends MongoRepository<UserEntity,String> {
    public UserEntity findByEmail(String email);
}
