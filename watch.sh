#!/bin/bash

rvm use 2.0
bundle install
gem install compass
bundle exec compass watch