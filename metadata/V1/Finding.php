<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/finding.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Finding
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecurityMarks::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87090a2c676f6f676c652f636c6f75642f736563757269747963656e74" .
            "65722f76312f66696e64696e672e70726f746f121e676f6f676c652e636c" .
            "6f75642e736563757269747963656e7465722e76311a19676f6f676c652f" .
            "6170692f7265736f757263652e70726f746f1a33676f6f676c652f636c6f" .
            "75642f736563757269747963656e7465722f76312f73656375726974795f" .
            "6d61726b732e70726f746f1a1c676f6f676c652f70726f746f6275662f73" .
            "74727563742e70726f746f1a1f676f6f676c652f70726f746f6275662f74" .
            "696d657374616d702e70726f746f1a1c676f6f676c652f6170692f616e6e" .
            "6f746174696f6e732e70726f746f22a4050a0746696e64696e67120c0a04" .
            "6e616d65180120012809120e0a06706172656e7418022001280912150a0d" .
            "7265736f757263655f6e616d65180320012809123c0a0573746174651804" .
            "2001280e322d2e676f6f676c652e636c6f75642e73656375726974796365" .
            "6e7465722e76312e46696e64696e672e537461746512100a086361746567" .
            "6f727918052001280912140a0c65787465726e616c5f7572691806200128" .
            "0912580a11736f757263655f70726f7065727469657318072003280b323d" .
            "2e676f6f676c652e636c6f75642e736563757269747963656e7465722e76" .
            "312e46696e64696e672e536f7572636550726f70657274696573456e7472" .
            "79124a0a0e73656375726974795f6d61726b7318082001280b322d2e676f" .
            "6f676c652e636c6f75642e736563757269747963656e7465722e76312e53" .
            "656375726974794d61726b734203e04103122e0a0a6576656e745f74696d" .
            "6518092001280b321a2e676f6f676c652e70726f746f6275662e54696d65" .
            "7374616d70122f0a0b6372656174655f74696d65180a2001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d701a4f0a15536f" .
            "7572636550726f70657274696573456e747279120b0a036b657918012001" .
            "280912250a0576616c756518022001280b32162e676f6f676c652e70726f" .
            "746f6275662e56616c75653a02380122380a05537461746512150a115354" .
            "4154455f554e5350454349464945441000120a0a06414354495645100112" .
            "0c0a08494e41435449564510023a6cea41690a2573656375726974796365" .
            "6e7465722e676f6f676c65617069732e636f6d2f46696e64696e6712406f" .
            "7267616e697a6174696f6e732f7b6f7267616e697a6174696f6e7d2f736f" .
            "75726365732f7b736f757263657d2f66696e64696e67732f7b66696e6469" .
            "6e677d42da010a22636f6d2e676f6f676c652e636c6f75642e7365637572" .
            "69747963656e7465722e763150015a4c676f6f676c652e676f6c616e672e" .
            "6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f" .
            "736563757269747963656e7465722f76313b736563757269747963656e74" .
            "6572aa021e476f6f676c652e436c6f75642e536563757269747943656e74" .
            "65722e5631ca021e476f6f676c655c436c6f75645c536563757269747943" .
            "656e7465725c5631ea0221476f6f676c653a3a436c6f75643a3a53656375" .
            "7269747943656e7465723a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

