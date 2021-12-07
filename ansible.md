# 【Day2 課題3 モジュール調査】 fail

## failモジュール
whenの条件に合致した場合に、メッセージを出力する

## 使用例

* CentOS 7以外は全てfailさせ実行を終了させる

```
- name: OS check
  fail: msg="not supported."
  when:
    - ansible_distribution == "CentOS"
    - ansible_distribution_major_version|int < 7
```

## 参考サイト

* [ansible.builtin.fail – Fail with custom message](https://docs.ansible.com/ansible/latest/collections/ansible/builtin/fail_module.html)  
* [technote: Ansibleのfailモジュール](https://tech.withsin.net/2015/10/05/ansible-fail-module/)  
* [goodbyegangsterのブログ](https://goodbyegangster.hatenablog.com/entry/2019/05/18/112921)  
