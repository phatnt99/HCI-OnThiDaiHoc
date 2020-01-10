/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow
 */

import React, { Component } from 'react';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

import {
  Home, LyThuyet, Document, Forum, Post, Replie, DeThi, ChiTietDe, ChiTietCauHoi, Search, Profile
  , LichSuLamBai, DeThiDaLam, ThongBao, TimKiemDeThi, DangBai, DangNhap, DangKi
} from './components';
import { Badge, withBadge, Icon } from 'react-native-elements';
import { createMaterialBottomTabNavigator } from 'react-navigation-material-bottom-tabs';
const DeThiStack = createStackNavigator({
  'DeThi': DeThi,
  'ChiTietDe': ChiTietDe,
  'Document': Document,
  'ChiTietCauHoi': ChiTietCauHoi
}, { headerMode: 'none' });

const SearchStack = createStackNavigator({
  'TimKiem': Search,
  'TimKiemDeThi': TimKiemDeThi,
  'DeThi': DeThiStack,
  'ChiTietDe': ChiTietDe,
  'ChiTietCauHoi': ChiTietCauHoi,
  'LyThuyet': LyThuyet,
  'Document': Document
}, { headerMode: 'none' });
SearchStack.navigationOptions = ({ navigation }) => {
  let tabBarVisible = true;
  if (navigation.state.index > 0) {
    tabBarVisible = false;
  }
  return {
    tabBarVisible,
  };
};

const ForumStack = createStackNavigator({
  'DienDan': Forum,
  'Post': Post,
  'Replie': Replie,
  'DangBai': DangBai
}, { headerMode: 'none' });

ForumStack.navigationOptions = ({ navigation }) => {
  let tabBarVisible = true;
  if (navigation.state.index > 0) {
    tabBarVisible = false;
  }
  return {
    tabBarVisible,
  };
};

const ProfileStack = createStackNavigator({
  'p5': Profile,
  'LichSu': LichSuLamBai,
  'Document': Document,
  'DeThiDaLam': DeThiDaLam,
  'ChiTietDe': ChiTietDe,
  'ChiTietCauHoi': ChiTietCauHoi

}, { headerMode: 'none' });
ProfileStack.navigationOptions = ({ navigation }) => {
  let tabBarVisible = true;
  if (navigation.state.index > 0) {
    tabBarVisible = false;
  }
  return {
    tabBarVisible,
  };
};

const NotiStack = createStackNavigator({
  'ThongBao': ThongBao,
  'ChiTietDe': ChiTietDe,
  'ChiTietCauHoi': ChiTietCauHoi

}, { headerMode: 'none' });
NotiStack.navigationOptions = ({ navigation }) => {
  let tabBarVisible = true;
  if (navigation.state.index > 0) {
    tabBarVisible = false;
  }
  return {
    tabBarVisible,
  };
};


const Index = createMaterialBottomTabNavigator(
  {
    'Khám phá': SearchStack,
    'Diễn đàn': ForumStack,
    'Thông báo': NotiStack,
    'Người dùng': ProfileStack
  },
  {
    barStyle: { backgroundColor: '#ffffff', elevation: 7 },
    activeColor: '#00817C',
    //inactiveColor: '#c4c4c4',
    defaultNavigationOptions: ({ navigation }) => ({
      tabBarIcon: ({ focused, horizontal, tintColor }) => {
        const { routeName } = navigation.state;
        //let IconComponent = Ionicons;
        let iconName;
        if (routeName === "Khám phá") {
          iconName = `md-compass`;
          // Sometimes we want to add badges to some icons.
          // You can check the implementation below.
          //IconComponent = HomeIconWithBadge;
        } else if (routeName === "Diễn đàn") {
          iconName = `ios-chatboxes`;
        } else if (routeName === "Người dùng") {
          iconName = `ios-person`;
        } else if (routeName === "Thông báo") {
          iconName = `md-notifications`;
        }
        // You can return any component that you like here!
        const IconWithBadge = routeName === "Thông báo" ? withBadge(2)(Icon) : Icon;
        return <IconWithBadge type="ionicon" name={iconName} size={25} color={tintColor} />
      },
    }),
  },
);
const DangStack = createStackNavigator({
  'DangNhap': DangNhap,
  'DangKi': DangKi,
}, { headerMode: 'none' });

const Root = createStackNavigator({
  'DangStack': DangStack,
  'Index': Index
}, { headerMode: 'none' })

const App = createAppContainer(Root);


export default App;
